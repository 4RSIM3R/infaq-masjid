<?php

namespace App\Http\Controllers;

use App\Contract\CampaignContract;
use App\Contract\EventContract;
use App\Http\Requests\DonationRequest;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Faq;
use Exception;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{

    protected EventContract $event;
    protected CampaignContract $campaign;

    public function __construct(EventContract $event, CampaignContract $campaign)
    {
        $this->event = $event;
        $this->campaign = $campaign;
    }

    public function index()
    {
        $campaigns = Campaign::query()->take(4)->get();
        $events = Event::query()->take(4)->get();
        $faqs = Faq::query()->get();
        return view('home', compact('campaigns', 'events', 'faqs'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function event(Request $request)
    {
        $page = $request->get('page');
        $events = $this->event->all(paginate: true, page: $page);
        return view('home.event', compact('events'));
    }

    public function event_detail($id)
    {
        $event = $this->event->findById($id);
        return view('home.event_detail', compact('event'));
    }

    public function campaign(Request $request)
    {
        $page = $request->get('page');
        $campaigns = $this->campaign->all(paginate: true, page: $page);
        return view('home.campaign', compact('campaigns'));
    }

    public function campaign_detail($id)
    {
        $campaign = $this->campaign->findById($id, ['donations']);
        return view('home.campaign_detail', compact('campaign'));
    }

    public function donation($id, DonationRequest $request)
    {
        $campaign = $this->campaign->findById($id);
        $payload = $request->validated();

        if (($payload['amount'] + $campaign->total_donations_paid) > $campaign->target) {
            return redirect()->back()->withErrors('Total donation amount is greater than target');
        }

        \Midtrans\Config::$serverKey = env('SERVER_KEY');

        try {

            $payload['unique_id'] = Uuid::uuid7()->toString();
            $payload['method'] = 'MIDTRANS';
            $donation = Donation::create($payload);

            $params = [
                'transaction_details' => [
                    'order_id' => $payload['unique_id'],
                    'gross_amount' => $payload['amount'],
                ],
                'customer_details' => [
                    'first_name'    => $payload['donatur'],
                    'phone'         => $payload['phone_number'],
                ],
                'item_details' => [
                    [
                        'id' => $payload['unique_id'],
                        'price' => $payload['amount'],
                        'quantity' => 1,
                        'name' => $campaign->name
                    ]
                ],
            ];

            $url = Snap::createTransaction($params)->redirect_url;
            return redirect($url);
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
