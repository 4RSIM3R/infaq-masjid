@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-4 p-6 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $paid }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">
                Total Donasi
            </p>
        </div>
        <div class="col-span-4 p-6 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $campaigns }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">
                Jumlah Campaign
            </p>
        </div>
        <div class="col-span-4 p-6 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $events }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">
                Jumlah Kegiatan
            </p>
        </div>
    </div>

    <div class="relative overflow-x-auto mt-4">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Infaq Yang Diperoleh</h5>
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
                        Terkumpul
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
                            {{ number_format($item->target) }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ number_format($item->total_donations_paid) }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->progress_percentage }}%
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
