@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4"
        action="{{ isset($data->id) ? route('faq.update', $data->id) : route('faq.store') }}" method="POST">

        @if (isset($data->id))
            <input type="hidden" name="_method" value="PUT">
        @endif
        <div>
            <h1 class="text-xl font-semibold">Form Faq</h1>
            <p class="text-sm text-gray-400 mt-1">Tambah frequently asked questions</p>
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
            <label for="question" class="block mb-2 text-sm font-medium text-gray-900">Pertanyaan </label>
            <input type="text" id="question" name="question" value="{{ isset($data->question) ? $data->question : '' }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5" />
            @error('question')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('question') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="answer" class="block mb-2 text-sm font-medium text-gray-900">Jawaban </label>
            <textarea name="answer" id="answer"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md  block w-full p-2.5">{{ isset($data->answer) ? $data->answer : '' }}</textarea>
            @error('answer')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('answer') }}
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
