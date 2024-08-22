@extends('layouts.guest')

@section('content')
    <div class="max-w-screen-xl mx-auto">
        <img src="{{ $campaign->thumbnail }}" class="w-full h-auto rounded-lg">
        <p>Hello world</p>
        <p>Hello world</p>
        <form action="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
@endsection
