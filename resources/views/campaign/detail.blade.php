@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Campaign - {{ $data->name }}</h1>
                <p class="text-sm text-gray-400 mt-1">Detail report of campaign</p>
            </div>
            <div>
                <p class="text-base">Target - {{ $data->target }}</p>
                <p class="text-base mt-2">Progress - {{ $data->target }}</p>
            </div>
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
                            No HP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nominal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['donation'] as $item)
                        <tr class="bg-white border-b ">
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->donatur }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->phone_number }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->amount }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->status }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
