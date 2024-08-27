@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4"
        action="{{ isset($data->id) ? route('campaign.update', $data->id) : route('campaign.store') }}" method="POST"
        enctype="multipart/form-data">

        @if (isset($data->id))
            <input type="hidden" name="_method" value="PUT">
        @endif

        <div>
            <h1 class="text-xl font-semibold">Form Campaign</h1>
            <p class="text-sm text-gray-400 mt-1">{{ isset($data->id) ? 'Ubah Campaign Infaq' : 'Tambah Campaign Infaq' }}
            </p>
        </div>

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

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
            <input type="text" id="name" name="name" value="{{ isset($data->name) ? $data->name : '' }}"
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
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
            <textarea name="description" id="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5">{{ isset($data->description) ? $data->description : '' }}</textarea>
            @error('description')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('description') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="target" class="block mb-2 text-sm font-medium text-gray-900">Target</label>
            <input type="number" inputmode="numeric" id="target" name="target"
                value="{{ isset($data->target) ? $data->target : '' }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
            @error('target')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('target') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900">Deadline</label>
            <input type="date" id="end_date" name="end_date" value="{{ isset($data->end_date) ? $data->end_date : '' }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
            @error('end_date')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('end_date') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="thumbnail">Upload file</label>
            <input
                class="block w-full text-sm text-teal-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                id="thumbnail" name="thumbnail" type="file" accept="image/*">
            @error('thumbnail')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('thumbnail') }}
                    </div>
                </div>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-teal-700 hover:bg-teal-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Submit
        </button>

    </form>
@endsection
