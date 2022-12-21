<?php

namespace App\Http\Livewire;

use App\Models\Municipio;
use Livewire\Component;
use Livewire\WithPagination;

class MunicipiosTable extends Component
{
    use WithPagination;
    public $search='';
    public function render()
    {
        return view('livewire.municipios-table', [
            'Municipios' => Municipio::where('nombre','LIKE',"%{$this->search}%")->paginate(10),
         ]);
    }
}
