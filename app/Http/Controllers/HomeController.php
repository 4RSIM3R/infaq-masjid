<?php

namespace App\Http\Controllers;

use App\Contract\CampaignContract;
use App\Contract\EventContract;
use App\Models\Campaign;
use App\Models\Event;
use App\Models\Faq;
use Illuminate\Http\Request;

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
        $event = Event::query()->take(4)->get();
        $faq = Faq::query()->get();
        return view('home', compact('campaigns', 'event', 'faq'));
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
        $campaign = $this->event->findById($id);
        return view('home.event_detail', compact('event'));
    }

    public function campaign(Request $request)
    {
        $page = $request->get('page');
        $events = $this->campaign->all(paginate: true, page: $page);
        return view('home.campaign', compact('events'));
    }

    public function campaign_detail($id)
    {
        $campaign = $this->campaign->findById($id);
        return view('home.campaign_detail', compact('campaign'));
    }
}
