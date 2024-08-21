@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4" action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        <div>
            <h1 class="text-xl font-semibold">Form Event</h1>
            <p class="text-sm text-gray-400 mt-1">Tambah kegiatan masjid</p>
        </div>

        @if ($errors->any())
            <div class="mb-5">
                @foreach ($errors->all() as $error)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        @csrf

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Masukkan pertanyaan" />
            @error('name')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('name') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Lokasi </label>
            <input type="text" id="question" name="location"
                class="bg-gray-50 location border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Masukkan pertanyaan" />
            @error('location')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('location') }}
                    </div>
                </div>
            @enderror
        </div>

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

        <div class="mb-5">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal </label>
            <input type="date" id="date" name="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Masukkan jawaban"></textarea>
            @error('date')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('date') }}
                    </div>
                </div>
            @enderror
        </div>


        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="thumbnail">Upload file</label>
            <input
                class="block w-full text-sm text-green-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                id="thumbnail" name="thumbnail" type="file">
        </div>

        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Submit
        </button>

    </form>
@endsection
