@extends('layouts.guest')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 lg:max-w-7xl">
            <h2 class="text-xl font-bold text-gray-900">List campaign donation</h2>

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($campaigns['items'] as $data)
                    <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                        <a href="{{ route('home.campaign_detail', $data->id) }}">
                            <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                                <img src="{{ $data->thumbnail }}"
                                    class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                            </div>
                            <div class="flex flex-1 flex-col space-y-2 p-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $data->name }}
                                    </h3>
                                    <p class="text-sm text-gray-500">{{ $data->description }}</p>
                                </div>
                                <div class="flex justify-between">
                                    <p class="text-sm italic text-gray-500">Target</p>
                                    <p class="text-sm font-medium text-gray-900">{{ number_format($data->target) }}</p>
                                </div>
                                <div class="flex justify-between">
                                    <p class="text-sm italic text-gray-500">Terkumpul</p>
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ number_format($data->total_donations_paid) }}</p>
                                </div>
                                <div class="my-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-teal-600 h-2.5 rounded-full"
                                            style="width: {{ $data->progress_percentage }}%"></div>
                                    </div>
                                    <p class="text-sm text-right mt-1 text-gray-500">{{ $data->progress_percentage }}%</p>
                                </div>
                                <button type="button"
                                    class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-teal-700">
                                    Infaq Sekarang
                                </button>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="flex mt-4 items-center justify-center">
                @if ($data['prev_page'])
                    <a href="{{ route('event.index', ['page' => $data['prev_page']]) }}"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 hover:text-gray-700">
                        Previous
                    </a>
                @endif
                @if ($data['next_page'])
                    <a href="{{ route('event.index', ['page' => $data['next_page']]) }}"
                        class="flex items-center justify-center px-3 h-8 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 hover:text-gray-700">
                        Next
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
