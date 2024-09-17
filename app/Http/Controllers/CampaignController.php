<?php

namespace App\Http\Controllers;

use App\Contract\CampaignContract;
use App\Contract\ReportContract;
use App\Http\Requests\CampaignRequest;
use App\Http\Requests\UsageRequest;
use App\Models\Report;
use Exception;
use Illuminate\Http\Request;

class CampaignController extends Controller
{

    protected CampaignContract $service;
    protected ReportContract $report;

    public function __construct(CampaignContract $service, ReportContract $report)
    {
        $this->service = $service;
        $this->report = $report;
    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('perPage', 10);
        $data = $this->service->all(paginate: true, page: $page, dataPerPage: $perPage);
        return view('campaign.index', compact('data'));
    }


    public function create()
    {
        return view('campaign.form');
    }


    public function store(CampaignRequest $request)
    {
        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');
        unset($payload['thumbnail']);
        $result = $this->service->create($payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('campaign.index');
        }
    }

    public function report($id)
    {
        $data = $this->service->findById($id, relations: ['donations']);
        return view('campaign.report', compact('data'));
    }

    public function show($id)
    {
        $data = $this->service->findById($id);
        return view('campaign.form', compact('data'));
    }


    public function edit($id) {}


    public function update(CampaignRequest $request,  $id)
    {
        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');
        unset($payload['thumbnail']);
        $result = $this->service->update($id, $payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('campaign.index');
        }
    }


    public function destroy($id)
    {
        $result  = $this->service->delete($id);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('campaign.index');
        }
    }

    public function usage_form($id)
    {
        return view('campaign.usage', compact('id'));
    }

    public function usage_store($id, UsageRequest $request)
    {
        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');
        unset($payload['thumbnail']);
        $result = $this->report->create($payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('campaign.index');
        }
    }
}
