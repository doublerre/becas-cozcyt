<?php

namespace App\Http\Livewire;

use App\Models\Estado;
use Livewire\Component;
use Livewire\WithPagination;

class EstadosTable extends Component
{
    use WithPagination;
    public $search='';
    public function render()
    {
        return view('livewire.estados-table', [
            'Estados' => Estado::where('nombre','LIKE',"%{$this->search}%")->paginate(10),
         ]);
    }
}
