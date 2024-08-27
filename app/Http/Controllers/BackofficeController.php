<?php

namespace App\Http\Controllers;

use App\Contract\CampaignContract;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Event;

class BackofficeController extends Controller
{

    protected CampaignContract $service;

    public function __construct(CampaignContract $service)    
    {
        $this->service = $service;
    }

    public function index()
    {
        $campaigns = Campaign::query()->count();
        $events = Event::query()->count();
        $paid = Donation::query()->where('status', 'paid')->sum('amount');
        $data = $this->service->all(paginate: true);
        return view('backoffice.index', compact('campaigns', 'events', 'paid', 'data'));
    }
}
