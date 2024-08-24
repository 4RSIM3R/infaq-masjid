<?php

namespace App\Http\Controllers;

use App\Contract\DonationContract;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    protected DonationContract $service;

    public function __construct(DonationContract $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        \Midtrans\Config::$serverKey = env('SERVER_KEY');

        $serverKey = env('SERVER_KEY');
        $hashedKey = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashedKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature key'], 403);
        }

        $donation = Donation::query()->where('unique_id', $request->order_id)->first();

        if (!$donation) {
            return response()->json(['message' => 'Invalid order id'], 403);
        }

        switch ($request->transaction_status) {
            case 'settlement':
                Donation::query()->where('unique_id', $request->order_id)->update([
                    'status' => 'paid',
                ]);
                break;
            case 'pending':
                Donation::query()->where('unique_id', $request->order_id)->update([
                    'status' => 'pending',
                ]);
                break;
        }

        return response()->json(['message' => 'Success']);
    }
}
