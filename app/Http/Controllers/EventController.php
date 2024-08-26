<?php

namespace App\Http\Controllers;

use App\Contract\EventContract;
use App\Http\Requests\EventRequest;
use Exception;
use Illuminate\Http\Request;

class EventController extends Controller
{

    protected EventContract $service;

    public function __construct(EventContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('perPage', 10);
        $data = $this->service->all(paginate: true, page: $page, dataPerPage: $perPage);
        return view('event.index', compact('data'));
    }


    public function create()
    {
        return view('event.form');
    }


    public function store(EventRequest $request)
    {
        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');

        unset($payload['thumbnail']);

        $result = $this->service->create($payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('event.index');
        }
    }


    public function show($id)
    {
        $data = $this->service->findById($id);
        return view('event.form', compact('data'));
    }


    public function edit($id)
    {
        //
    }

    public function update(EventRequest $request,  $id)
    {
        $payload = $request->validated();
        $thumbnail = $request->file('thumbnail');
        unset($payload['thumbnail']);
        $result = $this->service->update($id, $payload, image: ["thumbnail" => $thumbnail]);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('event.index');
        }
    }


    public function destroy($id)
    {
        $result = $this->service->delete($id);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('event.index');
        }
    }
}
