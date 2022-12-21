<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
    <a href="/municipios/create">
      <x-jet-button wire:loading.attr="disabled">
          {{ __('Add') }}
      </x-jet-button>
    </a>
    <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
              <input type="text" wire:model="search" class="form-input block w-full rounded-md mt-1 shadow-md" placeholder="Buscar..."/>
              @if($Municipios->count())
                <table class="table-fixed w-full">
                  <thead>
                    <tr class="bg-gray-100">
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2 text-left w-20">
                        #
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Nombre
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $count = 1; ?>
                      @foreach ($Municipios as $e)
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$e->id}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$e->nombre}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href="/municipios/create">
                          <x-jet-button wire:loading.attr="disabled">
                              {{ __('Edit') }}
                          </x-jet-button>
                        </a>
                        <a href="/municipios/create">
                          <x-jet-danger-button wire:loading.attr="disabled" >
                              {{ __('Delete') }}
                          </x-jet-danger-button>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="bg-white px-4 py-3 justify-between border-t border-gray-200 sm:px-6">
                  {{ $Municipios->links() }}
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
