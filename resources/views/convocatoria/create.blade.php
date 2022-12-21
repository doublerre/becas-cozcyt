<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if ($convocatoria->id)
                {{ __('Actualizar modalidad') }}
            @else
                {{ __('Agregar nueva modalidad') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <form class="grid gap-8 grid-cols-1"
                            @if ($convocatoria->id) action="{{ route('convocatorias.update', ['convocatoria' => $convocatoria->id]) }}"
                        @else
                            action="{{ route('convocatorias.store') }}" @endif
                            enctype="multipart/form-data" method="POST">
                            @if ($convocatoria->id)
                                {{ method_field('PUT') }}
                            @endif
                            @csrf
                            <div class="form-group mb-2">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label inline-block mb-2 text-gray-700">Nombre de la modalidad</label>
                                    <input type="text" name="nombre"
                                        value="{{ old('nombre', $convocatoria->nombre) }}"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="" aria-describedby="" placeholder="Nombre de la convocatoria">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="form-label inline-block mb-2 text-gray-700">Descripción</label>
                                    <input type="text" name="descripcion"
                                        value="{{ old('descripcion', $convocatoria->descripcion) }}"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="" aria-describedby="" placeholder="Descripción">
                                </div>
                                <label for=""
                                    class="form-label inline-block mb-2 text-gray-700">Requisitos</label>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Acta de nacimiento" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Acta de nacimiento", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Acta de nacimiento
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="INE" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("INE", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        INE
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="CURP" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("CURP", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        CURP
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Carta de exposicion de motivos" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Carta de exposicion de motivos", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Carta de exposición de motivos
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Kardex" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Kardex", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Kardex de calificaciones
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Constancia de estudios" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Constancia de estudios", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Constancias de estudios
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Comprobante de ingresos" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Comprobante de ingresos", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Comprobante de ingresos
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Fotografía de la casa" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Comprobante de ingresos", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Fotografía de la casa
                                    </label>
                                </div>
                                <div class="form-group form-check mb-2">
                                    <input name="requisitos[]" value="Premio nacional" type="checkbox"
                                    @if($requi) @if(is_array($requi) && in_array("Comprobante de ingresos", $requi)) checked @endif @endif
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="">
                                    <label class="form-check-label inline-block text-gray-800" for="">
                                        Premio nacional
                                    </label>
                                </div>

                                <div class="form-group form-check mb-2">
                                    <input type="checkbox" id="check"
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        id="" onchange="javascript:mostrarInput()" />
                                    <label class="form-check-label" for="gridCheck">Otros requisitos</label>
                                </div>

                                <div class="form-group form-check mb-2" id="content" style="display: none;">
                                    <textarea name='requisitos[]'
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea13" rows="3"
                                        placeholder="Agregar requisitos separados por coma (requisito1, requisito2, etc)"></textarea>
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

                                <div class="form-group mb-2">
                                    <label for=""
                                        class="form-label inline-block mb-2 text-gray-700">Imagen</label>
                                    <input accept="image/jpeg,image/png" name="imagen" type="file"
                                        value="{{$convocatoria->imagen}}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="" aria-describedby="" placeholder="">
                                </div>
                                <div class="form-group mb-2" style="float: right">
                                    <br>
                                    <button type="submit"
                                        class="px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                        Guardar
                                    </button>
                                </div>
                                <div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
