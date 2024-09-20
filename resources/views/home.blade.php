@extends('layouts.guest')

@section('content')
    <div class="relative isolate overflow-hidden">
        <!-- Background Image -->
        <img src="{{ asset('masjid.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">

        <!-- Black Shadow Overlay -->
        <div class="absolute inset-0 bg-black opacity-50 -z-10"></div>

        <!-- Main Content -->
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-white ring-1 ring-white/10 hover:ring-white/20">
                    Yuk, Mari Kita Bangun Kebersamaan dan Keberkahan!
                </div>
            </div>
            <div class="text-center flex flex-col items-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                    BerInfaq
                </h1>
                <p class="mt-6 text-lg leading-8 text-white">
                    Berinfaq ke masjid bukan hanya berbagi harta, tapi juga berbagi pahala yang tak terputus. Jadilah bagian
                    dari cahaya yang menerangi rumah Allah, donasikan hartamu untuk kebaikan yang abadi.
                </p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="{{ route('home.campaign') }}"
                        class="rounded-md bg-teal-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm">
                        Infaq Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Background Element -->
    </div>

    {{-- <div class="my-16 max-w-screen-xl mx-auto flex flex-col">
        <p class="text-2xl font-bold text-center">Yuk Ber-infaq</p>
        <div
            class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 place-items-center justify-items-center">
            @foreach ($campaigns as $data)
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <a href="{{ route('home.campaign_detail', $data->id) }}">
                        <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                            <img src="{{ $data->thumbnail }}"
                                class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                        </div>
                        <div class="flex flex-1 flex-col space-y-2 p-4">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $data->name }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    {{ \Illuminate\Support\Str::limit($data->description, 50) }}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm italic text-gray-500">Target</p>
                                <p class="text-sm font-medium text-gray-900">{{ number_format($data->target) }}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm italic text-gray-500">Terkumpul</p>
                                <p class="text-sm font-medium text-gray-900">
                                    {{ number_format($data->total_donations_paid) }}</p>
                            </div>
                            <div class="my-2">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-teal-600 h-2.5 rounded-full"
                                        style="width: {{ $data->progress_percentage }}%"></div>
                                </div>
                                <p class="text-sm text-right mt-1 text-gray-500">{{ $data->progress_percentage }}%</p>
                            </div>
                            <button type="button"
                                class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-teal-700">
                                Infaq Sekarang
                            </button>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center my-4">
            <a href="{{ route('home.campaign') }}"
                class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-teal-700">
                Lihat Semua
            </a>
        </div>
    </div> --}}

    {{-- <div class="my-16 max-w-screen-xl mx-auto flex flex-col">
        <p class="text-2xl font-bold text-center">kegiatan Masjid Darul Ilmi</p>
        <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($events as $item)
                <a href="{{ route('home.event_detail', $item->id) }}">
                    <div class="relative">
                        <div class="relative h-72 w-full overflow-hidden rounded-lg">
                            <img src="{{ $item->thumbnail }}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="relative mt-4">
                            <h3 class="text-sm font-medium text-gray-900">{{ $item->location }} -
                                {{ Carbon\Carbon::parse($item->date)->format('d M Y') }}</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                {{ \Illuminate\Support\Str::limit($item->description, 50) }}</p>
                        </div>
                        <div
                            class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                            <div aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                            <p class="relative text-lg font-semibold text-white">{{ $item->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex justify-center my-4">
            <a href="{{ route('home.event') }}"
                class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-teal-700">
                Lihat Semua
            </a>
        </div>
    </div> --}}
    
    <div class="my-16 max-w-screen-xl mx-auto flex flex-col">
        <p class="text-2xl font-bold text-center">Pertanyaan yang sering diajukan</p>
        <div class="mt-8 w-full">
            @foreach ($faqs as $index => $faq)
                <div class="pt-6 max-w-lg mx-auto">
                    <dt>
                        <!-- Expand/collapse question button -->
                        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                            aria-controls="faq-{{ $index }}" aria-expanded="false"
                            onclick="toggleFAQ('{{ $index }}')">
                            <span class="text-base font-semibold leading-7">{{ $faq['question'] }}</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg id="icon-expand-{{ $index }}" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                                <svg id="icon-collapse-{{ $index }}" class="hidden h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12 hidden" id="faq-{{ $index }}">
                        <p class="text-base leading-7 text-gray-600">{{ $faq['answer'] }}</p>
                    </dd>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function toggleFAQ(index) {
            const faqContent = document.getElementById('faq-' + index);
            const iconExpand = document.getElementById('icon-expand-' + index);
            const iconCollapse = document.getElementById('icon-collapse-' + index);

            const isExpanded = faqContent.classList.contains('hidden');

            // Toggle visibility of the answer
            faqContent.classList.toggle('hidden');

            // Toggle icons
            iconExpand.classList.toggle('hidden');
            iconCollapse.classList.toggle('hidden');
        }
    </script>
@endpush
