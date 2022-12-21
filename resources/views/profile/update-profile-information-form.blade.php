{{-- <x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualice la información de su cuenta: Datos Personales, Datos Domicilio y Datos Escolares') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-8 sm:col-span-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div
                    class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingOne">
                        <button
                            class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                            aria-expanded="false" aria-controls="flush-collapseOne">
                            Datos personales
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse border-0 collapse show"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">
                            <div class="form-group mb-6">
                                <x-jet-label for="curp" value="{{ __('CURP') }}" />
                                <x-jet-input id="curp" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.curp" autocomplete="curp" />
                                <x-jet-input-error for="curp" class="mt-2" />
                                <x-jet-label for="rfc" value="{{ __('RFC') }}" />
                                <x-jet-input name="rfc" id="rfc" type="text"
                                    placeholder="RFC" class="mt-1 block w-full"
                                    wire:model.defer="state.rfc" autocomplete="rfc" />
                                <x-jet-input-error for="rfc" class="mt-2" />
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" type="email" class="mt-1 block w-full"
                                    wire:model.defer="state.email" />
                                <x-jet-input-error for="email" class="mt-2" />
                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                                    !$this->user->hasVerifiedEmail())
                                    <p class="text-sm mt-2">
                                        {{ __('Your email address is unverified.') }}
                                        <button type="button"
                                            class="underline text-sm text-gray-600 hover:text-gray-900"
                                            wire:click.prevent="sendEmailVerification">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>
                                    @if ($this->verificationLinkSent)
                                        <p v-show="verificationLinkSent"
                                            class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                @endif
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                <x-jet-input name="name" id="name" type="text" placeholder="Nombre"
                                    class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                                <x-jet-input-error for="name" class="mt-2" />
                                <x-jet-label for="ap_paterno" value="{{ __('Apellido Paterno') }}" />
                                <x-jet-input name="ap_paterno" id="ap_paterno" type="text"
                                    placeholder="Apellido Paterno" class="mt-1 block w-full"
                                    wire:model.defer="state.ap_paterno" autocomplete="ap_paterno" />
                                <x-jet-input-error for="ap_paterno" class="mt-2" />
                                <x-jet-label for="ap_materno" value="{{ __('Apellido Materno') }}" />
                                <x-jet-input name="ap_materno" id="ap_materno" type="text"
                                    placeholder="Apellido Materno" class="mt-1 block w-full"
                                    wire:model.defer="state.ap_materno" autocomplete="ap_materno" />
                                <x-jet-input-error for="ap_materno" class="mt-2" />
                                <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha de Nacimiento') }}" />
                                <x-jet-input name="fecha_nacimiento" id="fecha_nacimiento" type="date"
                                    placeholder="Fecha de Nacimiento" class="mt-1 block w-full"
                                    wire:model.defer="state.fecha_nacimiento" autocomplete="fecha_nacimiento" />
                                <x-jet-input-error for="fecha_nacimiento" class="mt-2" />
                                <label for="" class="form-label inline-block mb-2 text-gray-700">Genero</label>
                                <select name="genero"
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                                <label for="" class="form-label inline-block mb-2 text-gray-700">¿Perteneces a
                                    un grupo étnico?</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingTwo">
                        <button
                            class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                            aria-expanded="false" aria-controls="flush-collapseTwo">
                            Datos Domicilio
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">
                            <div class="form-group mb-6">
                                <label for=""
                                    class="form-label inline-block mb-2 text-gray-700">Estado</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="">Listado de estados</option>
                                </select>
                                <label for=""
                                    class="form-label inline-block mb-2 text-gray-700">Municipio</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="id">Listado de municipios...</option>
                                </select>
                                <x-jet-label for="name" value="{{ __('Colonia') }}" />
                                <x-jet-input name="colonia" id="colonia" type="text" placeholder="Colonia"
                                    class="mt-1 block w-full" wire:model.defer="state.colonia"
                                    autocomplete="colonia" />
                                <x-jet-input-error for="colonia" class="mt-2" />
                                <x-jet-label for="name" value="{{ __('Calle') }}" />
                                <x-jet-input name="calle" id="calle" type="text" placeholder="Calle"
                                    class="mt-1 block w-full" wire:model.defer="state.calle" autocomplete="Calle" />
                                <x-jet-input-error for="Calle" class="mt-2" />
                                <x-jet-label for="name" value="{{ __('Numero de casa') }}" />
                                <x-jet-input name="numero" id="numero" type="number"
                                    placeholder="Numero de casa" class="mt-1 block w-full"
                                    wire:model.defer="state.numero" autocomplete="numero" />
                                <x-jet-input-error for="numero" class="mt-2" />
                                <x-jet-label for="name" value="{{ __('Codigo postal') }}" />
                                <x-jet-input name="codigo_postal" id="codigo_postal" type="number"
                                    placeholder="Codigo postal" class="mt-1 block w-full"
                                    wire:model.defer="state.codigo_postal" autocomplete="Codigo Postal" />
                                <x-jet-input-error for="colonia" class="mt-2" />
                                <x-jet-label for="tel_cel" value="{{ __('Telefono celular') }}" />
                                <x-jet-input name="tel_cel" id="tel_cel" type="number"
                                    placeholder="Telefono Celular" class="mt-1 block w-full"
                                    wire:model.defer="state.tel_cel" autocomplete="Telefono celular" />
                                <x-jet-input-error for="tel_cel" class="mt-2" />
                                <label for="" class="form-label inline-block mb-2 text-gray-700">¿Tienes
                                    télefono fijo??</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="accordion-item border-l-0 border-r-0 border-b-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingThree">
                        <button
                            class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                            aria-expanded="false" aria-controls="flush-collapseThree">
                            Datos Escolares
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">
                            <div class="form-group mb-6">
                                <label for=""
                                    class="form-label inline-block mb-2 text-gray-700">Institución</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    @foreach ($instituciones as $institucion)
                                            <option value=" {{ $institucion->id }} ">{{ $institucion->name }}</option>
                                        @endforeach
                                </select>
                                <label for=""
                                    class="form-label inline-block mb-2 text-gray-700">Carrera</label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option selected>Seleccionar</option>
                                    <option value="id">Listado de carreras...</option>
                                </select>
                                <x-jet-label for="name" value="{{ __('Grado escolar') }}" />
                                <x-jet-input name="grado" id="grado" type="number"
                                    placeholder="Grado escolar" class="mt-1 block w-full"
                                    wire:model.defer="state.grado" autocomplete="grado" />
                                <x-jet-input-error for="grado" class="mt-2" />
                                <x-jet-label for="name" value="{{ __('Promedio general') }}" />
                                <x-jet-input name="promedio" id="promedio" type="number"
                                    placeholder="Promedio general" class="mt-1 block w-full"
                                    wire:model.defer="state.promedio" autocomplete="promedio" />
                                <x-jet-input-error for="promedio" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>
        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section> --}}
