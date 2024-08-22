@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Campaign</h1>
                <p class="text-sm text-gray-400 mt-1">Campaign infaq</p>
            </div>

            <a href="{{ route('campaign.create') }}"
                class="flex items-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10">
                <box-icon class="h-4 w-4 mr-2" name='plus'></box-icon>
                Tambah Campaign
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
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Target
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Progres
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
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->target }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                0
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap flex">
                                <a href=""
                                    class="text-gray-900 border border-gray-800 font-medium rounded-md text-sm px-5 py-2.5 text-center">
                                    <box-icon name='detail'></box-icon>
                                </a>
                                <a href=""
                                    class="text-gray-900 border border-gray-800 font-medium rounded-md text-sm px-5 py-2.5 text-center">
                                    <box-icon name='pencil'></box-icon>
                                </a>
                                <form action="{{ route('campaign.destroy', $item->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <button
                                        class="text-red-900 border border-red-800 font-medium rounded-md text-sm px-5 py-2.5 text-center">
                                        <box-icon name='trash'></box-icon>
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
                <a href="{{ route('event.index', ['page' => $data['prev_page']]) }}"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 hover:text-gray-700">
                    Previous
                </a>
            @endif
            @if ($data['next_page'])
                <a href="{{ route('event.index', ['page' => $data['next_page']]) }}"
                    class="flex items-center justify-center px-3 h-8 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-100 hover:text-gray-700">
                    Next
                </a>
            @endif
        </div>
    </div>
@endsection
