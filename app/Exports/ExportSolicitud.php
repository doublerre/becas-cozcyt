<?php

namespace App\Exports;

use App\Models\Solicitud;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportSolicitud implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
  
    public function view(): View
    {
        return view('solicitud.solicitudes', [
            'solicitudes' => Solicitud::all()
        ]);
    }
}
