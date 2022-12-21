<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estadisticas') }}
        </h2>
    </x-slot>

    <!-- GRAFICAS PARA HOMBRES Y MUJERES DE UNA "INSTITUCIÓN -> "CARRERA" -> "MODALIDAD" -->
    <div class="grid grid-cols-2 md:grid-cols-2 px-5 py-5">
        <div class="block rounded-lg shadow-lg bg-white px-5 py-5 mr-5">
            <h5 class="text-gray-900 text-xl font-medium mb-2">
                Filtrado de resultados (INSTITUCIÓN CARRERA MODALIDAD)
            </h5>
            <p class="text-gray-600 text-base">
                Filtra los resultados de acuerdo a institauciones y sus carreras, para conocer el número total de hombres
                y mujeres que han solicitado la beca.
            </p>
            <br>
            <label for="instituiones">Selecciona una escuela</label>
            <select
                class="form-select appearance-none block w-full px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="" id="instituiones">
                <option value=""></option>
            </select>

            <br>
            <label for="carreras">Selecciona una carrera</label>
            <select
                class="form-select appearance-none block w-full px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="" id="carreras">
                <option value=""></option>
            </select>

            <br>
            <label for="modalidad">Selecciona una modalidad</label>
            <select
                class="form-select appearance-none block w-full px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="" id="modalidad">
                <option value=""></option>
            </select>

        </div>
        <div class="block rounded-lg shadow-lg bg-white">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-6 px-3 bg-gray-50" id="nombre_C">Hombres y mujeres</div>
                <canvas class="p-13" id="chartPie"></canvas>
            </div>
        </div>
    </div>

    <br>

    <!-- GRAFICA PARA HOMBRES Y MUJERES PERTENECIENTES A UN "ESTADO" -> "MUNICIPIO" -->
    <div class="grid grid-cols-2 md:grid-cols-2 px-5 py-5 flex">
        <div class="block rounded-lg shadow-lg bg-white px-5 py-5 mr-5">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Filtrado de resultados (ESTADO MUNICIPIO)</h5>
            <p class="text-gray-600 text-base">
                Filtra los resultados de acuerdo a estados y municipios, para conocer el número total de hombres
                y mujeres que pertenecen a las zonas mencionadas.
            </p>
            <br>
            <label for="carreras">Selecciona un Estado</label>
            <select
                class="form-select appearance-none block w-full px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="" id="estado">
                <option value=""></option>
            </select>
            <br>

            <label for="carreras">Selecciona un Municipio</label>
            <select
                class="form-select appearance-none block w-full px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="" id="municipio">
                <option value=""></option>
            </select>

        </div>
        <div class="block rounded-lg shadow-lg bg-white">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-6 px-5 bg-gray-50" id="nombre_C">Hombres y mujeres</div>
                <canvas class="p-13" id="chartBarTwo"></canvas>
            </div>
        </div>
    </div>

    <br>

    <!-- GRAFICA PARA ACEPTADOS Y RECHAZADOS DE ACUERDO A UNA MODALIDAD-->
    <div class="grid grid-cols-2 md:grid-cols-2 px-5 py-5 flex">
        <div class="block rounded-lg shadow-lg bg-white px-5 py-5 mr-5">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Filtrado de resultados (MODALIDAD)</h5>
            <p class="text-gray-600 text-base">
                Filtra los resultados de acuerdo a modalidades, para conocer el número total de personas que han sido aceptadas y rechazadas en las modalidades ya establecidas.
            </p>
            <br>
            <label for="modalidadTwo">Selecciona una Modalidad</label>
            <select
                class="form-select appearance-none block w-full px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                name="" id="modalidadTwo">
                <option value=""></option>
            </select>
        </div>
        <div class="block rounded-lg shadow-lg bg-white">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-6 px-5 bg-gray-50" id="nombre_C">Aceptados y Rechazados</div>
                <canvas class="p-13" id="chartBarThree"></canvas>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        var UsMunEstData = <?php echo json_encode($UsMunEst); ?>;
        var municipiosData = <?php echo json_encode($municipios); ?>;
        var estadosData = <?php echo json_encode($estados); ?>;

        var modalidadData = <?php echo json_encode($modalidades); ?>;

        var userData = <?php echo json_encode($usuarios); ?>;
        var schoolData = <?php echo json_encode($escuelas); ?>;
        var carreraData = <?php echo json_encode($carreras); ?>;

    </script>
    <script src="{{ asset('js/chartsEstadistica.js') }}"></script>
</x-app-layout>
