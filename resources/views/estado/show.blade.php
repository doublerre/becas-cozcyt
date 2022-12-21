<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualizar Estado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-center">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">{{$estado->nombre}}</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</x-app-layout>
