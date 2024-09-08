<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Utama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-2">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            Card Information--}}
            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-x-4 justify-center">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TUNTUTAN DALAM PROSES</h5>
                    <p class="mb-3 font-normal text-green-500 dark:text-green-500">0</p>
                </div>
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TUNTUTAN DILULUSKAN</h5>
                    <p class="mb-3 font-normal text-green-500 dark:text-green-500">0</p>
                </div>
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">AHLI KELUARGA</h5>
                    <p class="mb-3 font-normal text-green-500 dark:text-green-500">0</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
