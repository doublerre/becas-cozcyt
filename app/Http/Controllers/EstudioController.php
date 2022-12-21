<?php
 
namespace App\Http\Controllers;
 
use App\Models\Estudio;
use Illuminate\Http\Request;
 
class EstudioController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return view('estudio.index');
   }
 
   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       return view('estudio.create');
   }
 
   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       //
       $input = $request->all();
 
 
       $request->validate([
           'ocupacion' => 'required|max:255',
           'actualmente_vives_con' => 'required|max:255',
           'tiempo_viviendo_ahi' => 'required|numeric',
           'casa_donde_vives_es' => 'required|max:255',
           'material_del_piso' => 'required|max:255',
           'cantidad_recamaras' => 'required|numeric',
           'cantidad_banos' => 'required|numeric',
           'tiene_sala' => 'required|boolean',
           'tiene_cocina_independiente' => 'required|boolean',
           'servicios_con_los_que_cuenta' => 'required|max:255',
           'cuentas_en_casa_con' => 'required|max:255',
           'tienes_seguro_gastos_medicos' => 'required|boolean',
           'que_transporte_utilizas' => 'required|max:255',
           'nombre_completo' => 'required|max:255',
           'parentesco' => 'required|max:255',
           'estado_civil' => 'required|max:255',
           'edad' => 'required|numeric',
           'genero' => 'required|max:255',
           'escolaridad' => 'required|max:255',
           'termino_carrera' => 'required|boolean',
           'trabaja' => 'required|boolean'
       ]);
 
       Estudio::create($input);
 
   }
 
   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Estudio  $estudio
    * @return \Illuminate\Http\Response
    */
   public function show(Estudio $estudio)
   {
       //
   }
 
   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Estudio  $estudio
    * @return \Illuminate\Http\Response
    */
   public function edit(Estudio $estudio)
   {
       //
   }
 
   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Estudio  $estudio
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Estudio $estudio)
   {
       //
   }
 
   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Estudio  $estudio
    * @return \Illuminate\Http\Response
    */
   public function destroy(Estudio $estudio)
   {
       //
   }
}
