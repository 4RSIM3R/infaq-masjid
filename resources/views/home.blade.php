@extends('layouts.guest')

@section('content')
    <div class="relative isolate overflow-hidden">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
            alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center flex flex-col items-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Data to enrich your online business
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
                    qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get
                        started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
    <div class="my-16 max-w-screen-xl mx-auto flex flex-col">
        <p class="text-2xl font-bold text-center">Yuk Ber-infaq</p>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
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
                                <p class="text-sm text-gray-500">{{ $data->description }}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm italic text-gray-500">Target</p>
                                <p class="text-sm font-medium text-gray-900">{{ $data->target }}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm italic text-gray-500">Terkumpul</p>
                                <p class="text-sm font-medium text-gray-900">{{ $data->target }}</p>
                            </div>
                            <div class="my-2">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <p class="text-sm text-right mt-1 text-gray-500">45%</p>
                            </div>
                            <button type="button"
                                class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
                                Infaq Sekarang
                            </button>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center my-4">
            <a href=""
                class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
                Lihat Semua
            </a>
        </div>
    </div>
    <div class="my-16 max-w-screen-xl mx-auto flex flex-col">
        <p class="text-2xl font-bold text-center">kegiatan Masjid Darul Ilmi</p>
        <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($event as $item)
                <a href="{{ route('home.event_detail', $item->id) }}">
                    <div class="relative">
                        <div class="relative h-72 w-full overflow-hidden rounded-lg">
                            <img src="{{ $item->thumbnail }}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="relative mt-4">
                            <h3 class="text-sm font-medium text-gray-900">{{ $item->location }}</h3>
                            <p class="mt-1 text-sm text-gray-500">{{ $item->description }}</p>
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
            <a href=""
                class="mt-2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
                Lihat Semua
            </a>
        </div>
    </div>
    <div class="my-16 max-w-screen-xl mx-auto flex flex-col">
        <p class="text-2xl font-bold text-center">Pertanyaan yang sering diajukan</p>
        <div class="mt-20">
            <dl class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                @foreach ($faq as $item)
                    <div>
                        <dt class="text-base font-semibold leading-7 text-gray-900">{{ $item->question }}</dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">{{ $item->answer }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
@endsection
