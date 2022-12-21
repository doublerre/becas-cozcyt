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
                <div class="container"><br>
                    <body class="d-flex justify-content-center p-4 pt-4">
                        <div class="card">
                            <div class="card-header bg-success text-white">Registro completo</div>
                            <CENTER>
                                <div class="card-body">
                                    Hola <b>{{ Auth::user()->name}} {{ Auth::user()->ap_paterno}} {{ Auth::user()->ap_materno}}</b>, gracias por registrar tu estudio socioeconómico, proximamente
                                    recibirás una
                                    respuesta de <br /> tu solicitud de beca al correo
                                    <b>{{ Auth::user()->email}}</b> te recomendamos revisarlo periodicamente para conocer los resultados
                                    <br /> de la
                                    convocatoría. Gracias.<br><br>
                                    <a href="/estudio" class="btn btn-sm btn-primary">Regresar al inicio</a>
                                </div>
                            </CENTER>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
