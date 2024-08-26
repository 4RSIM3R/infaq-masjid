@extends('layouts.guest')

@section('content')
    <div class="relative isolate my-24"></div>
    <div class=" max-w-screen-xl mx-auto mt-20">
        <div class="flex items-start space-x-4">
            <div class="max-w-screen-lg">
                <img src="{{ $campaign->thumbnail }}" class="w-full border border-gray-200 h-auto rounded-lg">
            </div>
        </div>
        <div class="flex flex-col space-y-4 items-start my-8">
            <h1 class="text-2xl font-bold text-center">{{ $campaign->name }}</h1>
            <p class="text-sm text-gray-400 mt-1">{{ $campaign->description }}</p>
        </div>
        <form action="{{ route('home.donation', $campaign->id) }}" method="POST">
            @if ($errors->any())
                <div class="mb-5">
                    @foreach ($errors->all() as $error)
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
            @csrf
            <input type="hidden" name="campaign_id" value="{{ $campaign->id }}">
            <div class="mb-5">
                <label for="donatur" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="donatur" name="donatur" value="Hamba Allah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('donatur')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('donatur') }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">No. Hp</label>
                <input type="tel" id="phone_number" name="phone_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('phone_number')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('phone_number') }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="amount" class="block mb-2 text-sm font-medium text-gray-900">Nominal</label>
                <input type="number" inputmode="numeric" min="0" id="amount" name="amount"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('amount')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('amount') }}
                        </div>
                    </div>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-teal-700 hover:bg-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Submit
            </button>
        </form>
    </div>
@endsection
