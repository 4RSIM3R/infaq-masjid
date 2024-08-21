@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Setting</h1>
                <p class="text-sm text-gray-400 mt-1">Setting aplikasi</p>
            </div>
        </div>
        <form action="{{ route('setting.update') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi </label>
                <textarea name="description" id="description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                    placeholder="Masukkan jawaban"></textarea>
                @error('description')
                    <div class="mt-2">
                        <div class="text-sm text-red-600">
                            {{ $errors->first('description') }}
                        </div>
                    </div>
                @enderror
            </div>
        </form>
    </div>
@endsection
