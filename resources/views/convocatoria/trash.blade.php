<x-app-layout>
    <style>
        .alinear div {
            display: inline-table;
            font-size: 15px;
            padding: 14px;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modalidades deshabilitadas') }}
        </h2>
    </x-slot>

    <div class="container">

        <CENTER>
            <div class="alinear">
                @foreach ($convo as $c)
                    <div class="py-12">
                        <div class="flex justify-center">
                            <div class="rounded-lg shadow-lg bg-white max-w-sm h-80 w-100">
                                <h5 class="text-gray-900 text-xl font-medium mb-2" style="background-color: #e5e7eb">
                                    {{ $c->nombre }}</h5>
                                @if ($c->imagen == '')
                                    <img class="h-80 w-100" src="img/default.png" />
                                @else
                                    <img class="h-80 w-100" src="{{ $c->imagen }}" />
                                @endif
                                <div class="p-12">
                                    <p class="flex justify-center">{{ $c->descripcion }}</p>
                                </div>
                                <br>
                                <form action="{{ route('convocatoria.restore', $c->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </CENTER>

</x-app-layout>
