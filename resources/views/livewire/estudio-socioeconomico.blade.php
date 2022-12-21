
<div>
    <form wire:submit.prevent="register">
        {{-- Paso 1--}}
        
        
        @if ($currentStep == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Paso 1/5 - Datos socioeconómicos</div>
                <div class="card-body">


                    
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="">Ocupación</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu ocupación" 
                                    wire:model="ocupacion">
                                <span class="text-danger">@error('ocupacion'){{ $message }}@enderror</span>
                            </div>
                            
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Actualmente, ¿Trabajas?</label>
                                <select class="form-control" name="test" wire:model="other_questions" wire:model="trabajas">
                                    <option value="" selected>Elige tu respuesta</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <span class="text-danger">@error('trabajas'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        @if($other_questions == "si")
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Teléfono de trabajo</label>
                                <input type="text" class="form-control" placeholder="Ingresa tú teléfono de trabajo" 
                                    wire:model="telefono_trabajo">
                                <span class="text-danger">@error('telefono_trabajo'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Horario de trabajo</label>
                                <input type="time" class="form-control" wire:model="horario_trabajo">
                                <span class="text-danger">@error('horario_trabajo'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Sueldo mensual</label>
                                <input type="number" class="form-control" placeholder="Ingresa tú salario mensual"
                                        wire:model="sueldo_mensual">
                                <span class="text-danger">@error('sueldo_mensual'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    
                        @endif
                    </div>
                      
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Actualmente vives con:</label>
                                <select class="form-control" wire:model="vives_con">
                                    <option value="" selected>Elige tu respuesta</option>
                                    <option value="padres">Padres</option>
                                    <option value="familiares">Familiares (tios, abuelos, etc)</option>
                                    <option value="Amigos">Amigos</option>
                                    <option value="conyuge">Esposo(a)</option>
                                </select>
                                <span class="text-danger">@error('vives_con'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tiempo viviendo en ese domicilio: </label>
                                <input type="number" class="form-control" placeholder="Ingresa tiempo viviendo ahí"
                                    wire:model="tiempo_viviendo">
                                <span class="text-danger">@error('tiempo_viviendo'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif 
      

    {{-- paso 2 --}}
           @if ($currentStep == 2) 
           <div class="step-two">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Paso 2/5 - Datos Socioeconómicos</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">La casa donde vives es :</label>
                                    <input type="text" class="form-control" list="status" placeholder="Ingresa para buscar..." 
                                    wire:model="status_casa" multiple>
                                    <datalist id="status" >
                                        <option value="propia">Propia</option>
                                        <option value="rentada">Rentada</option>
                                        <option value="casa_huespedes">Casa de Huespedes</option>
                                        <option value="prestada">Prestada</option>
                                    </datalist>
                                    <span class="text-danger">@error('status_casa'){{ $message }}@enderror</span>    
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Con cuantas personas vives?</label>
                                    <input type="text" class="form-control" placeholder="Ingresa con cuantas personas vives"
                                        wire:model="personas_viviendo">
                                    <span class="text-danger">@error('personas_viviendo'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            
                            
                        </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">El material del piso es:</label>
                                        <input type="text" class="form-control" list="materiales" placeholder="Ingresa para buscar..." wire:model="material_piso" multiple>
                                        <datalist id="materiales">
                                            <option value="tierra">Tierra</option>
                                            <option value="madera">Madera</option>
                                            <option value="cemento">Cemento</option>
                                            <option value="mosaico">Mosaico o Azulejo</option>
                                            <option value="alfombra">Alfombra</option>
                                            <option value="duela">Duela</option>
                                        </datalist>
                                        <span class="text-danger">@error('material_piso'){{ $message }}@enderror</span>
                                    </div> 
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Cuantás recamaras tiene?</label>
                                        <input type="text" class="form-control" placeholder="Ingresa el numero de recamaras"
                                            wire:model="cantidad_recamaras">
                                        <span class="text-danger">@error('cantidad_recamaras'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Cuántos baños tiene?</label>
                                        <input type="text" class="form-control" placeholder="Ingresa el numero de baños"
                                            wire:model="cantidad_banos">
                                        <span class="text-danger">@error('cantidad_banos'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Tiene sala?</label>
                                        <select class="form-control" wire:model="tiene_sala">
                                            <option value="" selected>Elige tu respuesta</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>
                                        </select>
                                        <span class="text-danger">@error('tiene_sala'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">¿Tiene cocina independiente?</label>
                                        <select class="form-control" wire:model="tiene_cocina_independiente">
                                            <option value="" selected>Elige tu respuesta</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>
                                        </select>
                                        <span class="text-danger">@error('tiene_cocina_independiente'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
           </div>
           @endif

        {{-- paso 3 --}}
           @if ($currentStep == 3)
           <div class="step-three">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Paso 3/5 - Datos Socioeconómicos</div>
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis quod, mollitia veniam 
                        vitae modi doloribus et provident iste illo. Voluptatibus cumque quas aperiam a tempora harum 
                        ipsa, officiis reprehenderit consectetur.

                        <div class="servicios d-flex flex-column align-items-left mt-2">
                            <label for="agua">
                                <input type="checkbox" id="agua" value="agua" wire:model="servicios_cuenta"> Agua
                            </label>
                            <label for="telefono">
                                <input type="checkbox" id="telefono" value="telefono" wire:model="servicios_cuenta"> Teléfono                                
                            </label>
                            <label for="luz">
                                <input type="checkbox" id="luz" value="luz" wire:model="servicios_cuenta"> Luz
                            </label>
                            <label for="gas">
                                <input type="checkbox" id="gas" value="gas" wire:model="servicios_cuenta"> Gas
                            </label>
                            <label for="drenaje">
                                <input type="checkbox" id="drenaje" value="drenaje" wire:model="servicios_cuenta"> Drenaje
                            </label>
                            <label for="tv_cable">
                                <input type="checkbox" id="tv_cable" value="tv_cable" wire:model="servicios_cuenta"> Tv por cable
                            </label>
                            <label for="pavimento">
                                <input type="checkbox" id="pavimento" value="pavimento" wire:model="servicios_cuenta"> Pavimento
                            </label>
                            <label for="internet">
                                <input type="checkbox" id="internet" value="internet" wire:model="servicios_cuenta"> Internet
                            </label>
                        </div>
                        <span class="text-danger">@error('servicios_cuenta'){{ $message }}@enderror</span>
                    </div>
                </div>
           </div>
           @endif

        {{-- paso 4 --}}
           @if ($currentStep == 4)
           <div class="step-four">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Paso 4/5 - Datos Socioeconómicos</div>
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis quod, mollitia veniam 
                        vitae modi doloribus et provident iste illo. Voluptatibus cumque quas aperiam a tempora harum 
                        ipsa, officiis reprehenderit consectetur.

                        <div class="electrodomesticos d-flex flex-column align-items-left mt-2">
                            <label for="dvd">
                                <input type="checkbox" id="dvd" value="dvd" wire:model="electrodomesticos_en_casa"> DVD
                            </label>
                            <label for="television">
                                <input type="checkbox" id="television" value="television" wire:model="electrodomesticos_en_casa"> Televisión                                
                            </label>
                            <label for="estufa">
                                <input type="checkbox" id="estufa" value="estufa" wire:model="electrodomesticos_en_casa"> Estufa
                            </label>
                            <label for="licuadora">
                                <input type="checkbox" id="licuadora" value="licuadora" wire:model="electrodomesticos_en_casa"> Licuadora
                            </label>
                            <label for="computadora">
                                <input type="checkbox" id="computadora" value="computadora" wire:model="electrodomesticos_en_casa"> Computadora
                            </label>
                            <label for="lavadora">
                                <input type="checkbox" id="lavadora" value="lavadora" wire:model="electrodomesticos_en_casa"> Lavadora
                            </label>
                            <label for="estereo">
                                <input type="checkbox" id="estereo" value="estereo" wire:model="electrodomesticos_en_casa"> Estéreo
                            </label>
                            <label for="microondas">
                                <input type="checkbox" id="microondas" value="microondas" wire:model="electrodomesticos_en_casa"> Microondas
                            </label>
                        </div>
                        <span class="text-danger">@error('electrodomesticos_en_casa'){{ $message }}@enderror</span>
                    </div>
                </div>
           </div>
           @endif
        {{-- paso 5 --}}
           @if($currentStep == 5)
           <div class="step-five">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Paso 5/5 - Datos socioeconómicos</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md 6">
                                <div class="form-group">
                                    <label for="">¿Qué transporte utilizas?</label>
                                    <input type="text" class="form-control" list="materiales" placeholder="Doble clic para buscar o agrega tu respuesta..." 
                                        wire:model="transporte_utilizado" multiple>
                                        <datalist id="materiales">
                                            <option value="auto_propio">Auto propio</option>
                                            <option value="auto_familiar">Auto familiar</option>
                                            <option value="motocicleta">Motocicleta</option>
                                            <option value="camion">Camión</option>
                                            <option value="taxi">Taxi</option>
                                            <option value="bicicleta">Bicicleta</option>
                                            <option value="caminando">Caminando</option>
                                        </datalist>
                                        <span class="text-danger">@error('transporte_utilizado'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Número de automóviles en casa:</label>
                                    <input type="text" class="form-control" placeholder="Ingresa el número de automóviles" wire:model="numero_autos">
                                    <span class="text-danger">@error('numero_autos'){{ $message }}@enderror</span>
                                </div>
                            </div>                            
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">¿Cuentas con seguro de gastos médicos?</label>
                                    <select class="form-control" wire:model="seguro_medico">
                                        <option value="" selected>Elige tu respuesta</option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select>
                                    <span class="text-danger">@error('seguro_medico'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           @endif

           <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if($currentStep == 1)
                <div></div>
            @endif
                
            @if($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreseStep()">Atrás</button>
            @endif
               
            @if($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-success" wire:click="increseStep()">Siguiente</button>
            @endif

            @if($currentStep == 5)
                <button type="submit" class="btn btn-md btn-primary">Guardar</button>
            @endif


           </div>
    </form>
</div>

