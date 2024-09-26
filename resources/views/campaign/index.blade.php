@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Campaign Infaq Masjid</h1>
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
                            Terkumpul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Terpakai
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
                                {{ number_format($item->total_report) }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->progress_percentage }}%
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap flex space-x-2 items-center">
                                <a href="{{ route('campaign.report', $item->id) }}"
                                    class="text-gray-900 border border-gray-800 font-medium rounded-md text-sm p-2 text-center flex items-center justify-center">
                                    <box-icon name='paperclip' class="h-4 w-4"></box-icon>
                                </a>
                                <a href="{{ route('campaign.show', $item->id) }}"
                                    class="text-gray-900 border border-gray-800 font-medium rounded-md text-sm p-2 text-center flex items-center justify-center">
                                    <box-icon name='pencil' class="h-4 w-4"></box-icon>
                                </a>
                                <form action="{{ route('campaign.destroy', $item->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button data-modal-target={{ $item->id }} data-modal-toggle="{{ $item->id }}" type="button"
                                        class="text-red-900 border border-red-800 font-medium rounded-md text-sm p-2 text-center flex items-center justify-center">
                                        <box-icon name='trash' class="h-4 w-4 text-red-700"></box-icon>
                                    </button>
                                    <div id={{ $item->id }} tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                            <div class="relative bg-white rounded-lg shadow">
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Perhatian
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                        data-modal-hide="{{ $item->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="p-4 md:p-5 space-y-4">
                                                    apakah betul anda akan menghapus?
                                                </div>
                                                <div
                                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="{{ $item->id }}" type="submit"
                                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                        Ya, Hapus
                                                    </button>
                                                    <button data-modal-hide="{{ $item->id }}" type="button"
                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 focus:z-10 focus:ring-4">
                                                        Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
