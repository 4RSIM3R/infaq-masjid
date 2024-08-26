@extends('layouts.guest')

@section('content')
    <div class="relative isolate my-16"></div>
    <div class=" max-w-screen-xl mx-auto mt-20 flex flex-col items-start justify-start">
        <div class="mx-auto max-w-screen-xl">
            <img src="{{ $event->thumbnail }}" class="w-full border border-gray-200 h-auto rounded-lg">
        </div>
        <p class="text-lg font-bold text-center mt-4">{{ $event->name }}</p>
        <p class="text-base text-gray-400 mt-1">{{ $event->description }}</p>
        <p class="text-lg font-bold text-center mt-4">Tanggal</p>
        <p class="text-base text-gray-400 mt-1">{{ $event->date }}</p>
        <p class="text-lg font-bold text-center mt-4">Lokasi</p>
        <p class="text-base text-gray-400 mt-1">{{ $event->location }}</p>
    </div>
@endsection
