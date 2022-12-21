<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>
    <br>

    <div class="container">
        <a href="/carta-pdf">
            <button type="button" style="float: right"
                class="inline-block px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out"
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Solicitar carta compromiso
            </button>
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <form action="{{ route('datosperfil.actua', $datosPerfil->id) }}" method="POST">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <b>
                                    <h1>Información personal</h1>
                                </b><br>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="curp" class="block text-sm font-medium text-gray-700">
                                            CURP</label>
                                        <input type="text" name="curp" id="curp" autocomplete="given-name"
                                            value="{{ $datosPerfil->curp }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="rfc"
                                            class="block text-sm font-medium text-gray-700">RFC</label>
                                        <input type="text" name="rfc" id="rfc" autocomplete="given-name"
                                            value="{{ $datosPerfil->rfc }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">
                                            Nombre (s)</label>
                                        <input type="text" name="name" id="name"
                                            value="{{ $datosPerfil->name }}" autocomplete="given-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="ap_paterno" class="block text-sm font-medium text-gray-700">Apellido
                                            paterno
                                        </label>
                                        <input type="text" name="ap_paterno" id="ap_paterno"
                                            autocomplete="family-name" value="{{ $datosPerfil->ap_paterno }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="ap_materno" class="block text-sm font-medium text-gray-700">Apellido
                                            materno</label>
                                        <input type="text" name="ap_materno" id="ap_materno"
                                            value="{{ $datosPerfil->ap_materno }}" autocomplete="family-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="edad" class="block text-sm font-medium text-gray-700">Edad
                                        </label>
                                        <input type="number" name="edad" id="edad" autocomplete="family-name"
                                            value="{{ $datosPerfil->edad }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="genero"
                                            class="block text-sm font-medium text-gray-700">Genero</label>
                                        <select id="genero" name="genero" autocomplete="genero"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            @if ($datosPerfil->genero == "Hombre")
                                                <option value="Hombre" selected>Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                            @elseif ($datosPerfil->genero == "Mujer")
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer" selected>Mujer</option>
                                            @else
                                                <option selected>Seleccionar</option>
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                            @endif
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="g_etnico"
                                            class="block text-sm font-medium text-gray-700">¿Perteneces a un grupo
                                            étnico?</label>
                                        <select id="g_etnico" name="g_etnico" autocomplete="g_etnico"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            @if ($datosPerfil->g_etnico == "Si")
                                                <option value="Si" selected>Si</option>
                                                <option value="No">No</option>
                                            @elseif ($datosPerfil->g_etnico == "No")
                                                <option value="Si">Si</option>
                                                <option value="No" selected>No</option>
                                            @else
                                                <option selected>Seleccionar</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" style="float: right;"
                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Guardar
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <form action="{{ route('datosperfil.actua', $datosPerfil->id) }}" method="POST">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <b>
                                    <h1>Información de domicilio</h1>
                                </b><br>
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="estado"
                                            class="block text-sm font-medium text-gray-700">Estado</label>
                                        <select id="estado" name="estado" autocomplete="estado"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option selected>Seleccionar</option>
                                            @foreach ($estados as $e)
                                                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="municipio"
                                            class="block text-sm font-medium text-gray-700">Municipio</label>
                                        <select id="municipio" name="municipio" autocomplete="municipio"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option selected>Seleccionar</option>
                                            @foreach ($municipios as $m)
                                                <option value="{{ $m->nombre }}">{{ $m->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="colonia" class="block text-sm font-medium text-gray-700">Colonia

                                        </label>
                                        <input type="text" name="colonia" id="colonia"
                                            value="{{ $datosPerfil->colonia }}" autocomplete="family-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="calle" class="block text-sm font-medium text-gray-700">Calle
                                        </label>
                                        <input type="text" name="calle" id="calle"
                                            value="{{ $datosPerfil->calle }}" autocomplete="family-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="numero" class="block text-sm font-medium text-gray-700">Numero
                                            de casa
                                        </label>
                                        <input type="number" name="numero" id="numero"
                                            value="{{ $datosPerfil->numero }}" autocomplete="family-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="codigo_postal"
                                            class="block text-sm font-medium text-gray-700">Código postal

                                        </label>
                                        <input type="number" name="codigo_postal" id="codigo_postal"
                                            value="{{ $datosPerfil->codigo_postal }}" autocomplete="codigo_postal"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="tel_cel" class="block text-sm font-medium text-gray-700">Teléfono
                                            celular
                                        </label>
                                        <input type="number" name="tel_cel" id="tel_cel"
                                            value="{{ $datosPerfil->tel_cel }}" autocomplete="family-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <div class="form-group form-check mb-2">
                                            <label class="block text-sm font-medium text-gray-700"
                                                for="gridCheck">¿Cuentas con teléfono fijo?</label>
                                            <label class="form-check-label" for="gridCheck">Si</label>
                                            <input name="tel_fijo" value="Si " type="checkbox" id="check"
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                id="" onchange="javascript:mostrarInput()" /> <br>
                                            <label class="form-check-label" for="gridCheck">No</label>
                                            <input name="tel_fijo" value="No" type="checkbox" id="check"
                                                value="{{ $datosPerfil->tel_fijo }}"
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" />
                                        </div>
                                    </div>

                                    <script>
                                        function mostrarInput() {
                                            elemento = document.getElementById("content");
                                            check = document.getElementById("check");

                                            if (check.checked) {
                                                elemento.style.display = 'block';
                                            } else {
                                                elemento.style.display = 'none';
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" style="float: right;"
                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Guardar
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin de la informacion de domicilio --}}

    {{-- Informacion escolar --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <form action="{{ route('datosperfil.actua', $datosPerfil->id) }}" method="POST">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <b>
                                    <h1>Información Escolar</h1>
                                </b><br>
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="institucion"
                                            class="block text-sm font-medium text-gray-700">Institución</label>
                                        <select id="institucion" name="institucion" autocomplete="institucion"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option selected>Seleccionar</option>
                                            @foreach ($instituciones as $i)
                                                <option value="{{ $i->nombre }}">{{ $i->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="carrera"
                                            class="block text-sm font-medium text-gray-700">Carrera</label>
                                        <select id="carrera" name="carrera" autocomplete="carrera"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option selected>Seleccionar</option>
                                            @foreach ($carreras as $c)
                                                <option value="{{ $c->nombre }}">{{ $c->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                        <label for="grado" class="block text-sm font-medium text-gray-700">
                                            Grado escolar actual</label>
                                        <input type="number" name="grado" id="grado"
                                            value="{{ $datosPerfil->grado }}" autocomplete="given-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                        <label for="promedio" class="block text-sm font-medium text-gray-700">Promedio
                                            general
                                        </label>
                                        <input type="number" name="promedio" id="promedio"
                                            value="{{ $datosPerfil->promedio }}" autocomplete="family-name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" style="float: right;"
                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Guardar
                                </button> <br> <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Fin de la informacion escolar --}}

</x-app-layout>
