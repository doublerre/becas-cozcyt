<x-app-layout>
    <style>
        .alinear div {
            display: inline-table;
            font-size: 10px;
            padding: 12px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentación de la convocatoria: ') }} <b>{{$documentacion->nombre}}</b>
        </h2>
    </x-slot>

    <CENTER>
    <div class="alinear">
        
    @foreach ($requisitos as $req)
    <div class="py-12">
        <div class="flex justify-center">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">
                <a href="#!">
                    <img class="rounded-t-lg" style="height: 300px"
                        src="https://icon-library.com/images/preview-icon-png/preview-icon-png-26.jpg" alt="" />
                </a>
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">{{$req}}</h5>
                    <br>
                    <CENTER>
                        <input class="block w-full text-sm text-black-900 rounded-lg border cursor-pointer focus:outline-none dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple="">
                        <br>
                        <button type="button" style="width: 225px"
                            class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Subir
                        </button>
                        @hasrole('Super-Admin')
                        <br><br>
                        <button type="button"
                            class=" inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                            <i class="fa-solid fa-check"></i>
                        </button>
                        <button type="button"
                            class=" inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        @endhasrole
                    </CENTER>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>


        <button type="button" style="width: 30%"
        class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
        Solicitar
        </button>

</CENTER>
    <div class="py-12">
        <div class="flex justify-center">
            <button type="button"
                class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Enviar email
            </button>
            &nbsp;
            <a href="/mensajes">
                <button type="button"
                    class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Ver mensajes
                </button>
            </a>
            &nbsp;
            <button type="button"
                class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Crear mensaje
            </button>
            &nbsp;
            <button type="button"
                class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Obtener documentos
            </button>
        </div>
    </div>
</x-app-layout>
