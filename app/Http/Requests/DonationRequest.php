<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'campaign_id' => 'required|exists:campaigns,id',
            'user_id' => 'required|exists:users,id',
            'donatur' => 'required|string',
            'phone_number' => 'required|string',
            'amount' => 'required|numeric',
        ];
    }
}
