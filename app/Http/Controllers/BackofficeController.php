<?php

namespace App\Http\Controllers;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice.index');
    }
}
