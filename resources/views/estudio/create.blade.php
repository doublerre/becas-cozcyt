<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudio Socioeconómico') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-3 mb-3">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif


                    <form class="w-full max-w-lg" action="{{ route('estudio.store') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Cuál es tu ocupación?
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="ocupacion" id="ocupacion" type="text" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Actualmente vives con:
                                </label>
                                <select class="form-control" name="actualmente_vives_con" id="actualmente_vives_con">
                                    <option value="padres">Padres</option>
                                    <option value="familiares">Familiares</option>
                                    <option value="amigos">Amigos</option>
                                    <option value="esposx">Esposa/o</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Cuanto tiempo tienes viviendo ahí?
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="tiempo_viviendo_ahi" id="tiempo_viviendo_ahi" type="text" />
                            </div>
                        </div>


                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Cuanto tiempo tienes viviendo ahí?
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="tiempo_viviendo_ahi" id="tiempo_viviendo_ahi" type="number" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    La casa donde vives es:
                                </label>
                                <select class="form-control" name="casa_donde_vives_es" id="casa_donde_vives_es">
                                    <option value="propia">Propia</option>
                                    <option value="rentada">Rentada</option>
                                    <option value="huespedes">Casa de huéspedes</option>
                                    <option value="">Esposa/o</option>
                                </select>

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Otra:
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="casa_donde_vives_es" id="casa_donde_vives_es" type="text" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    El material de los pisos es:
                                </label>
                                <select class="form-control" name="material_del_piso" id="material_del_piso">
                                    <option value="tierra">Tierra</option>
                                    <option value="madera">Madera</option>
                                    <option value="alfombra">Alfombra</option>
                                    <option value="cemento">Cemento</option>
                                    <option value="mosaico">Mosaico</option>
                                    <option value="duela">Duela</option>

                                </select>

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Otro:
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="material_del_piso" id="material_del_piso" type="text" />
                            </div>
                        </div>


                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Cuántas recamaras tiene?
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="cantidad_recamaras" id="cantidad_recamaras" type="number" />
                            </div>
                        </div>


                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Cuántos baños tiene?
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="cantidad_banos" id="cantidad_banos" type="number" />
                            </div>
                        </div>


                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Tiene sala?
                                </label>
                                <select class="form-control" name="tiene_sala" id="tiene_sala">
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Tiene cocina independiente?
                                </label>
                                <select class="form-control" name="tiene_cocina_independiente"
                                    id="tiene_cocina_independiente">
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Con que servicios cuentas?
                                </label>
                                <select class="form-control" name="actualmente_vives_con" id="actualmente_vives_con">
                                    <option value="padres">Padres</option>
                                    <option value="familiares">Familiares</option>
                                    <option value="amigos">Amigos</option>
                                    <option value="esposx">Esposa/o</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Tienes en tu casa:
                                </label>
                                <select class="form-control" name="actualmente_vives_con" id="actualmente_vives_con">
                                    <option value="padres">Padres</option>
                                    <option value="familiares">Familiares</option>
                                    <option value="amigos">Amigos</option>
                                    <option value="esposx">Esposa/o</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Número de automoviles en tu casa:
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="cantidad_recamaras" id="cantidad_recamaras" type="number" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Cuentas con seguro de gastos médicos?
                                </label>
                                <select class="form-control" name="tiene_cocina_independiente"
                                    id="tiene_cocina_independiente">
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    ¿Qué transporte utilizas?
                                </label>
                                <select class="form-control" name="casa_donde_vives_es" id="casa_donde_vives_es">
                                    <option value="auto_propio">Auto propio</option>
                                    <option value="auto_familiar">Auto familiar</option>
                                    <option value="motocicleta">Motocicleta</option>
                                    <option value="camion">Camión</option>
                                    <option value="taxi">Taxi</option>
                                    <option value="caminando">Caminandando</option>
                                </select>


                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Otra:
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="casa_donde_vives_es" id="casa_donde_vives_es" type="text" />
                            </div>

                            {{-- <input type="submit" name="submit" value="Submit" class="btn btn-dark"> --}}
                            <button type="submit" name="submit" value="Submit"
                                class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Guardar</button>
                            &nbsp;
                    </form>
                            <a href="/estudio-pdf">
                                <button type="button"
                                    class=" inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Imprimir</button>
                            </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
