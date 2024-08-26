@extends('layouts.guest')

@section('content')
    <main class="isolate">
        <!-- Hero section -->
        <div class="mx-auto max-w-7xl px-6 py-24">
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
    </main>
@endsection
