<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de carreras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <br>
                    <a href="{{ route('carreras.create') }}">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            <i class="fa-solid fa-plus"></i> {{ __('Add') }}
                        </button>
                    </a>
                    <a href="/instituciones">
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                            <i class="fa-solid fa-building-columns"></i> Instituciones
                        </button>
                    </a>
                    <br><br>

                    <div style="text-align: center">
                        <table class="min-w-full" style="width: 100%" id="carreras">
                            <thead class="border-b" style="width: 100%">
                                <tr style="width: 100%">
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4"
                                        style="width: 10%">#</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4"
                                        style="width: 50%">Nombre</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4"
                                        style="width: 20%">Institución</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4"
                                        style="width: 20%">Puntuación</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4"
                                        style="width: 20%">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carreras as $carrera)
                                    <tr class="border-b" style="width: 100%">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                            style="width: 10%">{{ $carrera->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                            style="width: 50%">{{ $carrera->nombre }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                            style="width: 20%">{{ $carrera->instituciones->nombre }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                            style="width: 20%">{{ $carrera->puntos }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                            style="width: 20%">
                                            {{-- Modal de Eliminar --}}
                                            <button type="button"
                                                class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                data-bs-toggle="modal" data-bs-target="#eliminar{{ $carrera->id }}">
                                                <i class="fa-solid fa-trash-can"></i> {{ __('Delete') }}
                                            </button>
                                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                                id="eliminar{{ $carrera->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog relative w-auto pointer-events-none">
                                                    <div
                                                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                                        <div
                                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                            <h5 class="text-xl font-medium leading-normal text-gray-800"
                                                                id="exampleModalLabel">¿Desea eliminar?</h5>
                                                            <button type="button"
                                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"><b>X</b></button>
                                                        </div>
                                                        <div class="modal-body relative p-4">
                                                            <b>{{ $carrera->nombre }}</b> <br>
                                                            {{ $carrera->instituciones->nombre }}
                                                        </div>
                                                        <div
                                                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                            <button type="button"
                                                                class="px-6
                                                                py-2.5
                                                                bg-gray-600
                                                                text-white
                                                                font-medium
                                                                text-xs
                                                                leading-tight
                                                                uppercase
                                                                rounded
                                                                shadow-md
                                                                hover:bg-gray-700 hover:shadow-lg
                                                                focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                                active:bg-gray-800 active:shadow-lg
                                                                transition
                                                                duration-150
                                                                ease-in-out"
                                                                data-bs-dismiss="modal">{{ __('Close') }}</button>

                                                            <form method="POST"
                                                                action={{ route('carreras.destroy', ['carrera' => $carrera->id]) }}>
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit"
                                                                    class="px-6
                                                                py-2.5
                                                                bg-red-600
                                                                text-white
                                                                font-medium
                                                                text-xs
                                                                leading-tight
                                                                uppercase
                                                                rounded
                                                                shadow-md
                                                                hover:bg-red-700 hover:shadow-lg
                                                                focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                                active:bg-red-800 active:shadow-lg
                                                                transition
                                                                duration-150
                                                                ease-in-out
                                                                ml-1">
                                                                    {{ __('Delete') }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Modal de editar --}}
                                            <a href={{ route('carreras.edit', ['carrera' => $carrera->id]) }}>
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                                    <i class="fa-solid fa-pen-to-square"></i> {{ __('Edit') }}
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#carreras').DataTable({
                paging: false,
                ordering: false,
                info: false,
                responsive: true,
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "El registro no existe",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Buscar: "
                }
            });
        });
    </script>
