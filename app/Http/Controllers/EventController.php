<?php

namespace App\Http\Controllers;

use App\Contract\EventContract;
use App\Http\Requests\EventRequest;
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
        //
    }


    public function create()
    {
        //
    }


    public function store(EventRequest $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(EventRequest $request,  $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
