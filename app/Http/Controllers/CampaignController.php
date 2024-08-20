<?php

namespace App\Http\Controllers;

use App\Contract\CampaignContract;
use App\Http\Requests\CampaignRequest;
use Illuminate\Http\Request;

class CampaignController extends Controller
{

    protected CampaignContract $service;

    public function __construct(CampaignContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('perPage', 10);
        $data = $this->service->all(paginate: true, page: $page, dataPerPage: $perPage);
    }


    public function create()
    {
        //
    }


    public function store(CampaignRequest $request) {}


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(CampaignRequest $request,  $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
