<?php

namespace App\Http\Controllers;

use App\Contract\ReportContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Models\Campaign;
use Exception;

class ReportController extends Controller
{

    protected ReportContract $service;

    public function __construct(ReportContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('perPage', 10);
        $data = $this->service->all(paginate: true, page: $page, dataPerPage: $perPage);
        return view('report.index', compact('data'));
    }

    public function create()
    {
        $campaigns = Campaign::query()->get(["id", "name"]);
        return view('report.form', compact('campaigns'));
    }

    public function store(ReportRequest $request)
    {

        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');
        unset($payload['thumbnail']);
        $result = $this->service->create($payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('faq.index');
        }
    }

    public function show($id)
    {
        $data = $this->service->findById($id);
        $campaigns = Campaign::query()->get(["id", "name"]);
        return view('report.form', compact('data', 'campaigns'));
    }

    public function edit($id) {}

    public function update(ReportRequest $request,  $id)
    {
        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');
        unset($payload['thumbnail']);
        $result = $this->service->update($id, $payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('faq.index');
        }
    }


    public function destroy($id)
    {
        $result = $this->service->delete($id);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('faq.index');
        }
    }
}
