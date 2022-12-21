<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudio;
class EstudioSocioeconomico extends Component
{

   
    public $ocupacion;
    public $trabajas;
    public $telefono_trabajo;
    public $horario_trabajo;
    public $sueldo_mensual;
    public $vives_con;
    public $tiempo_viviendo;
    public $personas_viviendo;
    public $status_casa;
    public $material_piso;
    public $cantidad_recamaras;
    public $cantidad_banos;
    public $tiene_sala;
    public $tiene_cocina_independiente;
    public $servicios_cuenta = [];
    public $electrodomesticos_en_casa = [];
    public $numero_autos;
    public $seguro_medico;
    public $transporte_utilizado;
    
   

    public $totalSteps = 5;
    public $currentStep = 1;

    
    public $other_questions = "";

    
    
   
    public function mount()
    {
        $this->currentStep = 1;
    }


    public function increseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->$totalSteps;
        }
    }

    public function decreseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    private function validateData()
    {
        if($this->currentStep == 1){
            $this->validate([
                'ocupacion'=>'required|min:3|max:255',
                'vives_con'=>'required',
                'tiempo_viviendo' => 'required|max:99|numeric'
            ]);
        }
        elseif($this->currentStep == 2) {
            $this->validate([
                'personas_viviendo' => 'required|max:100|numeric',
                'cantidad_recamaras' => 'required|max:50|numeric',
                'cantidad_banos'=> 'required|max:10|numeric',
                'status_casa' => 'required|min:3|max:255',
                'material_piso' => 'required|min:3|max:255',
                'tiene_sala' =>'required',
                'tiene_cocina_independiente' => 'required'

            ]);

        }
        elseif($this->currentStep == 3){
            $this->validate([
                'servicios_cuenta' => 'required|array|min:1|max:255'
            ]);
        
        } elseif($this->currentStep == 4){
            $this->validate([ 
                'electrodomesticos_en_casa' => 'required|array|min:1|max:255'
            ]);
        }

    }

    public function register()
    {
        $this->resetErrorBag();
        if($this->currentStep == 5)
        {
            $this->validate([
                'transporte_utilizado' => 'required|min:3|max:255',
                'numero_autos' => 'required|max:10|numeric',
                'seguro_medico' => 'required'
            ]);

        }


        Estudio::insert([
            "ocupacion"=>$this->ocupacion,
            "trabajas"=>$this->trabajas,
            "telefono_trabajo"=>$this->telefono_trabajo,
            "horario_trabajo"=>$this->horario_trabajo,
            "sueldo_mensual"=>$this->sueldo_mensual,
            "vives_con"=>$this->vives_con,
            "tiempo_viviendo"=>$this->tiempo_viviendo,
            "status_casa"=>$this->status_casa,
            "material_piso"=>$this->material_piso,
            "tiene_sala"=>$this->tiene_sala,
            "tiene_cocina_independiente"=>$this->tiene_cocina_independiente,
            "electrodomesticos_en_casa"=>json_encode($this->electrodomesticos_en_casa),
            "transporte_utilizado" =>$this->transporte_utilizado,
            "numero_autos"=>$this->numero_autos,
            "seguro_medico"=>$this->seguro_medico,
            "personas_viviendo"=>$this->personas_viviendo,
            "cantidad_recamaras"=>$this->cantidad_recamaras,
            "cantidad_banos"=>$this->cantidad_banos,
            "servicios_cuenta"=>json_encode($this->servicios_cuenta)

        ]);

        
      
        $this->reset();
        $this->resetValidation();
        return redirect()->route('estudio.registrado');
        
        
    }


    
    public function render()
    {
        return view('livewire.estudio-socioeconomico');
    }
}
