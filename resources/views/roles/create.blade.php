<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role Management') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/roles">
                        <button type="button"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Listado
                        </button>
                    </a>
                    <br>

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                                @csrf
                                <div class="form-group mb-2">
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label inline-block mb-2 text-gray-700">Nombre</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            id="" aria-describedby="" placeholder="Nombre" required>
                                    </div>


                                    @foreach($permission as $value)

                                    <label for="" class="form-label inline-block mb-2 text-gray-700">{{
                                        Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    @endforeach

                                    <div class="form-group mb-2">
                                        <button type="submit" style="float: right;"
                                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                                            Guardar
                                        </button>
                                    </div>
                                    <br>
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>