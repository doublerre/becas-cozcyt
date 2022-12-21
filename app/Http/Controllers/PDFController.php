<?php
  
namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Genera pdf estudio socioeconomico
    public function generatePDF_estudio()
    {
        $estudio = Estudio::all();

        return view('PDF.myPDF', compact('estudio'));

        // $data = [
        //     'title' => 'Formato para estudio socioeconómico',
        //     'date' => date('d/m/Y'),
        //     'users' => $users
        // ];

        // return \PDF::loadView('PDF.myPDF', $data)
        // ->setPaper('a4', 'landscape')
        // ->download('EstudioSocioeconomico.pdf');
    }


    // Genera pdf carta fidelidad
    public function generatePDF_carta()
    {
        // Traer variables

        $data = [
            'title' => 'Ejemplo carta fidelidad',
            'date' => date('d/m/Y')
        ]; 

        return \PDF::loadView('PDF.carta', $data)->download('CartaFidelidad.pdf');
    } 
}
