<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mensajes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        {{-- Inicio del alert --}}
        <CENTER>
            <div style="width: 89%" class="alert bg-yellow-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show"
            role="alert">
            <strong class="mr-1">¡No tienes mensajes pendientes!</strong>
            <button type="button"
                class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                data-bs-dismiss="alert" aria-label="Close"><b>X</b></button>
            </div>
        </CENTER>
        {{-- Fin del alert --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <!-- Button trigger modal -->
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;
                    @hasrole('Super-Admin')
                        <button type="button" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700  over:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="far fa-comment"></i> Enviar mensaje
                    </button>
                    @endhasrole
                    <br><br>

                    <!-- Modal -->
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog relative w-auto pointer-events-none">
                            <div
                                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div
                                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                        Enviar Mensaje</h5>
                                    <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="modal" aria-label="Close"><b>X</b></button>
                                </div>
                                <div class="modal-body relative p-4">
                                    <div class="flex justify-center">
                                        <div class="mb-3 xl:w-96">
                                            <label for="exampleFormControlTextarea1"
                                                class="form-label inline-block mb-2 text-gray-700">Escriba El Correo</label>
                                            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border -solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea1" rows="3" placeholder="Correo"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body relative p-4">
                                    <div class="flex justify-center">
                                        <div class="mb-3 xl:w-96">
                                            <label for="exampleFormControlTextarea1"
                                                class="form-label inline-block mb-2 text-gray-700">Escriba su
                                                mensaje</label>
                                            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border -solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea1" rows="3" placeholder="Tu mensaje"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                    <button type="button"
                                        class="px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out"
                                        data-bs-dismiss="modal">Cerrar</button>
                                        <a href="/send-mail">
                                        <button type="button" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Enviar mensaje</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
