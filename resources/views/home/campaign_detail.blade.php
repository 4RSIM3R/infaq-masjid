@extends('layouts.guest')

@section('content')
    <div class="relative isolate my-16"></div>
    <div class=" max-w-screen-xl mx-auto mt-20">
        <div class="flex items-start space-x-4">
            <div class="max-w-screen-lg">
                <img src="{{ $campaign->thumbnail }}" class="w-full border border-gray-200 h-auto rounded-lg">
            </div>
            <div class="flex flex-col items-start justify-start my-8 h-auto">
                <p class="text-lg font-bold text-center">{{ $campaign->name }}</p>
                <p class="text-base text-gray-400 mt-1">{{ $campaign->description }}</p>
                <p class="text-lg font-bold text-center mt-2">Terkumpul</p>
                <p class="text-base text-gray-400 mt-1">{{ $campaign->target }}</p>
            </div>
        </div>
        <div class="flex flex-col space-y-4 items-start my-8">
            <h1 class="text-2xl font-bold text-center">{{ $campaign->name }}</h1>
            <p class="text-sm text-gray-400 mt-1">{{ $campaign->description }}</p>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="name" name="name" value="Hamba Allah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('name')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No. Hp</label>
                <input type="tel" id="phone" name="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('phone')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('phone') }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900">Nominal</label>
                <input type="number" inputmode="numeric" min="0" id="nominal" name="nominal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('nominal')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('nominal') }}
                        </div>
                    </div>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Submit
            </button>
        </form>
    </div>
@endsection
