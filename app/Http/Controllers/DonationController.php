<?php

namespace App\Http\Controllers;

use App\Contract\DonationContract;
use App\Http\Requests\DonationRequest;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    protected DonationContract $service;

    public function __construct(DonationContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DonationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
