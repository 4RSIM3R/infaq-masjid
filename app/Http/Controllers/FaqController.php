<?php

namespace App\Http\Controllers;

use App\Contract\FaqContract;
use App\Http\Requests\FaqRequest;
use Exception;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    protected FaqContract $service;

    public function __construct(FaqContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('perPage', 10);
        $data = $this->service->all(paginate: true, page: $page, dataPerPage: $perPage);
        return view('faq.index', compact('data'));
    }

    public function create()
    {
        return view('faq.form');
    }

    public function store(FaqRequest $request)
    {
        $payload = $request->validated();

        $result = $this->service->create($payload);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('faq.index');
        }
    }

    public function show($id)
    {
        $data = $this->service->findById($id);
        return view('faq.form', compact('data'));
    }

    public function edit($id) {}

    public function update(FaqRequest $request,  $id)
    {
        $payload = $request->validated();

        $result = $this->service->update($payload, $id);

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
