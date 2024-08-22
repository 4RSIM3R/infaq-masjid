<?php

namespace App\Http\Controllers;

use App\Contract\SettingContract;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    protected SettingContract $service;

    public function __construct(SettingContract $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = Setting::query()->first();
        return view('setting.index', compact('data'));
    }

    public function update(SettingRequest $request)
    {
        $payload = $request->validated();
        $result = $this->service->createOrUpdateFirst($payload);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('setting.index');
        }
    }
}
