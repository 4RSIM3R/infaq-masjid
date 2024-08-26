@extends('layouts.guest')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 lg:max-w-7xl">
            <h2 class="text-xl font-bold text-gray-900">Kegiatan Masjid</h2>

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($events['items'] as $item)
                    <a href="{{ route('home.event_detail', $item->id) }}">
                        <div class="relative">
                            <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ $item->thumbnail }}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="relative mt-4">
                                <h3 class="text-sm font-medium text-gray-900">{{ $item->location }} - {{ Carbon\Carbon::parse($item->date)->format('d M Y') }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $item->description }}</p>
                            </div>
                            <div
                                class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                <div aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                                <p class="relative text-lg font-semibold text-white">{{ $item->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
