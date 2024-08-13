<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Khairat</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans bg-white py-4 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-5">
            @if (Route::has('login'))
                <nav class="bg-white border-gray-200 dark:bg-gray-900">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <x-application-logo class="w-20 h-20 justify-start" />
                        <button data-collapse-toggle="navbar-default" type="button" class="text-green-500 bor inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 border border-green-500" aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Buka Menu</span>
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-green-500 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                            >
                                @auth
                                    <li
                                    >
                                        <a href="{{ url('/dashboard') }}"
                                           class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white">
                                            Dashboard
                                        </a>
                                    </li>
                                @else
                                    <li
                                        class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                                        <a href="{{ route('login') }}"
                                           class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white">
                                            Log Masuk
                                        </a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li
                                            class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                                            <a href="{{ route('register') }}"
                                               class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white">
                                                Daftar
                                            </a>
                                        </li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                    @endauth
                </nav>
            @endif
            <header class="flex-col xl:flex-row flex justify-between">

                <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0">
                    <h1 class="font-bold text-gray-700 text-3xl md:text-6xl leading-tight mb-10">Masjid <br> Permatang
                        <br> Badak
                    </h1>

                    <p class="font-normal text-gray-500 text-sm md:text-lg mb-10">Jalan Permatang Badak Damai, Permatang
                        Badak<br>Baru, 25150 Kuantan, Pahang.</p>

                    <a href="#"
                            class="w-full px-8 py-3 bg-green-500 font-medium text-white text-md md:text-lg rounded-md hover:bg-green-700 transition ease-in-out duration-300">Daftar Ahli
                    </a>
                </div>

                <div class="mx-auto xl:mx-0">
                    <img src=" {{ url('assets/test2.jpg') }}" alt="Image">
                </div>

            </header>
            {{-- Pengumuman AJK Section --}}
            <section class="py-8 md:py-16">
                <h1 class="font-bold text-gray-700 text-xl md:text-2xl leading-tight mb-10">
                    Pengumuman AJK
                </h1>
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-x-4">
                    <div
                        class="max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title Placeholder</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desc placeholder.</p>
                    </div>
                    <div
                        class="max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title Placeholder</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desc placeholder.</p>
                    </div>
                    <div
                        class="max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title Placeholder</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desc placeholder.</p>
                    </div>
                </div>
            </section>
                {{-- Kematian Terbaru Section --}}
                <section class="">
                    <h1 class="font-bold text-gray-700 text-xl md:text-2xl leading-tight mb-10">
                        Pengumuman Kematian Terbaru
                    </h1>
                    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-x-4">
                        <div
                            class="max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title Placeholder</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desc placeholder.</p>
                        </div>
                        <div
                            class="max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title Placeholder</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desc placeholder.</p>
                        </div>
                        <div
                            class="max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title Placeholder</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desc placeholder.</p>
                        </div>
                    </div>
                </section>
            <!-- Contact Us section -->
            <section class="py-8 md:py-16">
                <div class="container max-w-screen-xl mx-auto px-4">
                    <div class="flex flex-wrap md:flex-nowrap justify-between mb-8">
                        <div>
                            <p class="font-normal text-gray-500 text-md md:text-lg uppercase mb-3">Aduan</p>

                            <h1 class="font-bold text-gray-700 text-xl md:text-4xl">Mempunyai permasalahan?</h1>
                        </div>
                    </div>
                    <div class="mt-10">
                        <a href="#"
                           class="px-4 py-2 md:px-8 md:py-3 font-medium text-green-500 text-lg border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                            Hubungi AJK
                        </a>
                    </div>
                </div> <!-- container.// -->

            </section>
            <footer class="py-16 text-center text-sm text-black dark:text-black70">
                © 2024 Diuruskan oleh MYO Synergy Solutions Sdn Bhd
            </footer>
        </div>
</body>

</html>
