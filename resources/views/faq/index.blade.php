@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Faq</h1>
                <p class="text-sm text-gray-400 mt-1">Frequently Asked Questions</p>
            </div>

            <a href="{{ route('faq.create') }}"
                class="flex items-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10">
                <box-icon class="h-4 w-4 mr-2" name='plus'></box-icon>
                Tambah Faq
            </a>
        </div>

        <div class="relative overflow-x-auto mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawaban
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['items'] as $item)
                        <tr class="bg-white border-b ">
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->question }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->answer }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap flex space-x-2 items-center">
                                <a href="{{ route('faq.show', $item->id) }}"
                                    class="text-gray-900 border border-gray-800 font-medium rounded-md text-sm p-2 text-center flex items-center justify-center">
                                    <box-icon name='detail' class="h-5 w-5"></box-icon>
                                </a>
                                <a href="{{ route('faq.edit', $item->id) }}"
                                    class="text-gray-900 border border-gray-800 font-medium rounded-md text-sm p-2 text-center flex items-center justify-center">
                                    <box-icon name='pencil' class="h-5 w-5"></box-icon>
                                </a>
                                <form action="{{ route('faq.destroy', $item->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button
                                        class="text-red-900 border border-red-800 font-medium rounded-md text-sm p-2 text-center flex items-center justify-center">
                                        <box-icon name='trash' class="h-5 w-5 text-red-700"></box-icon>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex mt-4 items-center justify-center">
            @if ($data['prev_page'])
                <a href="{{ route('faq.index', ['page' => $data['prev_page']]) }}"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 hover:text-gray-700">
                    Previous
                </a>
            @endif
            @if ($data['next_page'])
                <a href="{{ route('faq.index', ['page' => $data['next_page']]) }}"
                    class="flex items-center justify-center px-3 h-8 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 hover:text-gray-700">
                    Next
                </a>
            @endif
        </div>

    </div>
@endsection