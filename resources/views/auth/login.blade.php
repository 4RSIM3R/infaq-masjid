<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berinfaq Console</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: "Plus Jakarta Sans", sans-serif;
            font-optical-sizing: auto;
        }
    </style>
</head>

<body class="h-screen w-full bg-white">

    <div class="h-screen mx-auto w-full max-w-sm lg:w-96 p-4 flex flex-col justify-center">
        <div class="flex flex-col justify-center items-center">
            <img class="h-24 w-24" src="{{ asset('white.png') }}">
            <h2 class="mt-8 text-xl font-bold leading-9 tracking-tight text-gray-900 text-center">
                Login BerInfaq
            </h2>
            <p class="mt-1 text-sm leading-6 text-gray-500 text-center">
                Yuk, Mari Kita Bangun Kebersamaan dan Keberkahan!
            </p>
        </div>

        @if ($errors->any())
            <div class="mt-2">
                @foreach ($errors->all() as $error)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        <div class="my-2">
            <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                        Email
                    </label>
                    <div class="mt-2">
                        <input id="email" autocomplete="off" name="email" type="email" autocomplete="email"
                            required
                            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-600 sm:text-sm sm:leading-6">
                        @error('email')
                            <p class="mt-1 text-xs italic text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" autocomplete="off" name="password" type="password"
                            autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-600 sm:text-sm sm:leading-6">
                        @error('password')
                            <p class="mt-1 text-xs italic text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-teal-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-600">
                        Signin
                    </button>
                </div>
            </form>
        </div>

        <span class="text-center">
            Belum punya akun? <a href="{{ route('register.form') }}" class="text-teal-600 hover:text-teal-500">Daftar
                disini</a>
        </span>

    </div>

</body>

</html>
