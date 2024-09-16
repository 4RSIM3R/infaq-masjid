<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berinfaq</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white w-full overflow-auto">

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="{{ URL::to('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('white.png') }}" class="h-16 object-cover">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('home.campaign') }}"
                    class="text-white bg-teal-700 hover:bg-teal-800 font-medium rounded-lg text-sm px-4 py-2 text-center hidden sm:flex">
                    Donasi Sekarang
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.campaign') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 ">Infaq</a>
                    </li>
                    <li>
                        <a href="{{ route('home.event') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 ">Kegiatan</a>
                    </li>
                    <li>
                        <a href="{{ route('home.about') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 ">Tentang
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-16 w-full">
        @yield('content')
    </div>

    <footer class="bg-white" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-screen-xl pb-8 pt-16 sm:pt-24 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8">
                    <img class="h-14" src="{{ asset('white.png') }}">
                    <p class="text-sm leading-6 text-gray-600">
                        Sebuah Website yang bertujuan untuk mengajak umat muslim untuk selalu beramal dan berbagi pahala
                        yang tak terputus sehingga mendapat ketenangan hati dan kebaikan yang abadi
                    </p>
                </div>
                <div class="flex flex-col items-center justify-start">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('login') }}"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('home.about') }}"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">
                                    Tentang Kami
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col items-end justify-start text-right">
                    <p>Masjid Darul Ilmi PNJ</p>
                    <p class="text-sm mt-2">Polteknik Negeri Jakarta, Jalan, Kukusan, Beji, Depok, Jawa Barat 16425</p>
                </div>
            </div>
            <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24">
                <p class="text-xs leading-5 text-gray-500">&copy; {{ Carbon\Carbon::now()->year }} Berinfaq. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')

</body>

</html>
