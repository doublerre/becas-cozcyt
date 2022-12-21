<x-app-layout>

    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    @livewireStyles

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudio socioeconómico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="d-flex justify-content-center p-4 pt-4">
                    <div class="col-md-10 offset-md">
                        @livewire('estudio-socioeconomico')
                    </div>
                    @livewireScripts
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
