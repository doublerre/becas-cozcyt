<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuración') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        @foreach ($config as $c )


                            <form class="grid gap-8 grid-cols-1"
                                enctype="multipart/form-data" method="POST">
                                @if ($c->id)
                                    {{ method_field('PUT') }}
                                @endif
                                @csrf
                            <div class="form-group mb-2">
                                <label for="" class="form-label inline-block text-gray-700">
                                    <b>Logo</b>
                                </label>
                                <br><br>
                                <div class="form-group mb-2">
                                    <label for="" class="form-label inline-block text-gray-700">
                                        Logo
                                    </label>
                                    <input name="logo" value="imagen" type="file"
                                        class="form-control px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="" aria-describedby="" placeholder="Nombre de la convocatoria">
                                </div>

                                <br><hr><br>
                                <label for="" class="form-label inline-block text-gray-700">
                                    <b>Color</b>
                                </label>
                                <br><br>
                                <div class="form-group mb-2">
                                    <label for="" class="form-label inline-block text-gray-700">
                                        Color Principal:
                                    </label>
                                    <input type="color" style="width: 15%;" value="#000000" name="color_prin"
                                        class="form-control text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                </div>

                                <div class="form-group mb-2" style="text-align: center">
                                    <br><hr><br>
                                    {{-- <form class="grid gap-8 grid-cols-1"
                                @if ($c->id) action="{{ route('configuracion.update', ['configuracion' => $c->id]) }}" @endif
                                enctype="multipart/form-data" method="POST">

                                @method('POST')

                                @csrf --}}
                                    <button type="submit" style="width: 30%"
                                        class="px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                        Guardar
                                    </button>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
