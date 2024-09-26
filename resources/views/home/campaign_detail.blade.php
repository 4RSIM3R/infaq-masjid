@extends('layouts.guest')

@section('content')
    <div class="relative isolate my-32"></div>
    <div class="max-w-screen-xl mx-auto mt-20">
        <div class="flex items-center justify-center space-x-4">
            <div class="max-w-screen-lg">
                <img src="{{ $campaign->thumbnail }}" class="w-full border border-gray-200 h-auto rounded-lg">
            </div>
        </div>
        <div class="flex flex-col space-y-4 items-start my-8">
            <h1 class="text-2xl font-bold text-center">{{ $campaign->name }}</h1>
            <p class="text-sm text-gray-400 mt-1">{{ $campaign->description }}</p>
        </div>


        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#form-infaq"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Form Infaq</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#report-infaq" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Laporan Infaq</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#report-usage" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Laporan Penggunaan</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="form-infaq" role="tabpanel"
                aria-labelledby="profile-tab">
                @if (Auth::check())
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
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="mb-5">
                            <label for="donatur" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" id="donatur" name="donatur" value="{{ Auth::user()->name }}"
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
                                value="{{ Auth::user()->phone_number }}"
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
                            <input type="text" inputmode="numeric" min="0" id="amount" name="amount"
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
                @else
                    <p>Please login first</p>
                @endif
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="report-infaq" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($campaign->donations as $donation)
                        <li class="py-3">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate ">
                                        {{ $donation->user->name }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{ $donation->created_at }} / {{ $donation->status }}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                    {{ number_format($donation->amount, 0, ',', '.') }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="report-usage" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($campaign->reports as $report)
                        <li class="py-3">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="{{ $report->thumbnail }}">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate ">
                                        {{ $report->title }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{ $report->description }}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                    {{ number_format($report->amount, 0, ',', '.') }}
                                </div>
                            </div>
                        </li>
                    @endforeach
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        new AutoNumeric('#amount', {
            digitGroupSeparator: '.',
            decimalCharacter: ',',
            decimalPlaces: 0, // No decimals
            unformatOnSubmit: true // Unformat when the form is submitted
        });
    </script>
@endpush
