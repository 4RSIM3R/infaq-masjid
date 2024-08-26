@extends('layouts.guest')

@section('content')
    <main class="isolate">
        <!-- Hero section -->
        <div class="mx-auto max-w-7xl px-6 py-32 lg:px-8">
            <div
                class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">
                    BerInfaq
                </h1>
                <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                    <p class="text-lg leading-8 text-gray-600">

                        BerInfaq adalah aplikasi manajemen infaq masjid yang dirancang untuk memudahkan pengelolaan donasi
                        secara transparan dan efisien. Aplikasi ini memungkinkan jamaah masjid untuk memberikan infaq secara
                        digital melalui berbagai metode pembayaran, seperti transfer bank, e-wallet, atau QR code.
                    </p>
                </div>
                <img src="https://baznas.go.id/assets/images/baznas-infaq-infak.jpg" alt=""
                    class="aspect-[6/5] w-full max-w-lg rounded-2xl object-cover lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2">
            </div>
        </div>

        <!-- Timeline section -->
        <div class="mx-auto -mt-8 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">
                <div>
                    <time datetime="2021-08" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Aug 2021
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Founded company</p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Nihil aut nam. Dignissimos a pariatur et quos omnis.
                        Aspernatur asperiores et dolorem dolorem optio voluptate repudiandae.</p>
                </div>
                <div>
                    <time datetime="2021-12" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Dec 2021
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Secured $65m in funding</p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Provident quia ut esse. Vero vel eos repudiandae
                        aspernatur. Cumque minima impedit sapiente a architecto nihil.</p>
                </div>
                <div>
                    <time datetime="2022-02" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Feb 2022
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Released beta</p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Sunt perspiciatis incidunt. Non necessitatibus
                        aliquid. Consequatur ut officiis earum eum quia facilis. Hic deleniti dolorem quia et.</p>
                </div>
                <div>
                    <time datetime="2022-12" class="flex items-center text-sm font-semibold leading-6 text-teal-600">
                        <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Dec 2022
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Global launch of product
                    </p>
                    <p class="mt-1 text-base leading-7 text-gray-600">Ut ipsa sint distinctio quod itaque nam qui. Possimus
                        aut unde id architecto voluptatem hic aut pariatur velit.</p>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We approach the workplace as
                    something that adds to our lives and adds value to world.</h2>
                <p class="mt-6 text-base leading-7 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit
                    est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.</p>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
                <div
                    class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-50 p-8 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">
                    <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">250k</p>
                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                        <p class="text-lg font-semibold tracking-tight text-gray-900">Users on the platform</p>
                        <p class="mt-2 text-base leading-7 text-gray-600">Vel labore deleniti veniam consequuntur sunt
                            nobis.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
                    <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                        <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made
                            over $8 billion in total revenue.</p>
                        <p class="mt-2 text-base leading-7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget
                            magna egestas.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-teal-600 p-8 sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">
                    <p class="flex-none text-3xl font-bold tracking-tight text-white">401,093</p>
                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                        <p class="text-lg font-semibold tracking-tight text-white">Transactions this year</p>
                        <p class="mt-2 text-base leading-7 text-teal-200">Eu duis porta aliquam ornare. Elementum eget
                            magna egestas. Eu duis porta aliquam ornare.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
