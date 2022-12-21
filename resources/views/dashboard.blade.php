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
            {{ __('Modalidades') }} para el periodo: (Agosto - Diciembre)
        </h2>
    </x-slot>

    <div class="container">
        {{-- Ocultar botones --}}
        @hasrole('Super-Admin')
            <br>
            <a href="/convocatorias/create">
                <button type="button" style="float: right;"
                    class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    <i class="fa-solid fa-plus"></i> {{ __('Add') }}
                </button>
            </a>
            {{-- @else --}}
            <a href="/habilitar">
                <button type="button" style="float: right"
                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                    <i class="fa-solid fa-check"></i>
                </button>
            </a>
            <br>
        @endhasrole
        <br>

        <CENTER>
            <div class="alinear">
                @foreach ($convocatorias as $convocatoria)
                    <div class="py-12">
                        <div class="flex justify-center">
                            <div class="rounded-lg shadow-lg bg-white max-w-sm h-80 w-100">
                                <h5 class="text-gray-900 text-xl font-medium mb-2" style="background-color: #e5e7eb">
                                    {{ $convocatoria->nombre }}</h5>
                                @if ($convocatoria->imagen == '')
                                    <img class="h-80 w-100" src="img/default.png" />
                                @else
                                    <img class="h-80 w-100" src="{{ $convocatoria->imagen }}" />
                                @endif
                                <div class="p-12">
                                    <p class="flex justify-center">{{ $convocatoria->descripcion }}</p>
                                </div>
                                <br>
                                <a href="/documentacion/{{ $convocatoria->id }}">
                                    <button type="button" style="width: 225px"
                                        class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Mis
                                        documentos</button>
                                </a>
                                @hasrole('Super-Admin')
                                    <br><br>
                                    <table>
                                        <tr>
                                            <th>
                                                <a
                                                    href="{{ route('convocatorias.edit', ['convocatoria' => $convocatoria->id]) }}">
                                                    <button type="button"
                                                        class=" inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                                        <i class="fa-solid fa-pencil"></i></button>
                                                </a>
                                            </th>
                                            <th>
                                                <form method="POST"
                                                    action={{ route('convocatorias.destroy', ['convocatoria' => $convocatoria->id]) }}>
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit"
                                                        class=" inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                                        <i class="fa-solid fa-xmark"></i>
                                                </form>
                                            </th>
                                        </tr>
                                    </table>
                                @endhasrole
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </CENTER>

        <CENTER>
            <br>
            <div style="width: 58%">
                {{ $convocatorias->links() }}
            </div><br>
        </CENTER>

</x-app-layout>
