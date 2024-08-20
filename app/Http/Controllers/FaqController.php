<?php

namespace App\Http\Controllers;

use App\Contract\FaqContract;
use App\Http\Requests\FaqRequest;
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
        //
    }

    public function create()
    {
        //
    }

    public function store(FaqRequest $request)
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

    public function update(FaqRequest $request,  $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
