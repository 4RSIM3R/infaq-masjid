@extends('layouts.guest')

@section('content')
    <div class="relative isolate my-16"></div>
    <div class=" max-w-screen-xl mx-auto mt-20">
        <div class="max-w-screen-xl">
            <img src="{{ $event->thumbnail }}" class="w-full border border-gray-200 h-auto rounded-lg">
        </div>
        <p class="text-lg font-bold text-center mt-4">{{ $event->name }}</p>
        <p class="text-base text-gray-400 mt-1">{{ $event->description }}</p>
        <p class="text-lg font-bold text-center">Tanggal</p>
        <p class="text-base text-gray-400 mt-1">{{ $event->date }}</p>
        <p class="text-lg font-bold text-center">Lokasi</p>
        <p class="text-base text-gray-400 mt-1">{{ $event->location }}</p>
    </div>
@endsection
