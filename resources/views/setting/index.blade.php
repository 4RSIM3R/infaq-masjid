@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Setting</h1>
                <p class="text-sm text-gray-400 mt-1">Setting aplikasi</p>
            </div>
        </div>
        <form class="mt-4" action="{{ route('setting.update') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Masjid</label>
                <input type="text" id="name" name="name" value="{{ isset($data['name']) ? $data['name'] : '' }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
                @error('name')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('name') }}
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
