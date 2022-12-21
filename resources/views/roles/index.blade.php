<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Administrador de Permisos') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        @can('role-create')
        <a href="{{ route('roles.create') }}">
          <x-jet-button wire:loading.attr="disabled">
            {{ __('Add') }}
          </x-jet-button>
        </a>
        @endcan
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">

                @if($roles->count())
                <table class="table-fixed w-full">
                  <thead>
                    <tr class="bg-gray-100">
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2 text-left w-20">
                        #
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Nombre
                      </th>
                      <!-- acciones -->
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($roles as $role)
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$role->id}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $role->name }}
                      </td>
                      @can('role-edit')
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href={{ route('roles.edit', ['role'=> $role->id]) }}>
                          <x-jet-button wire:loading.attr="disabled">
                            {{ __('Edit') }}
                          </x-jet-button>
                        </a>
                        @endcan
                        @can('role-delete')
                        <x-jet-danger-button wire:loading.attr="disabled">
                          {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                          $role->id],'style'=>'display:inline']) !!}
                          {!! Form::submit( 'ELIMINAR', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                        </x-jet-danger-button>
                        @endcan
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="bg-white px-4 py-3 justify-between border-t border-gray-200 sm:px-6">
                  {{ $roles->links() }}
                </div>
                @else
                <div class="bg-white px-4 py-3 justify-between border-t border-gray-200 sm:px-6">
                  No hay resultados para la busqueda "{{$search}}"
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>