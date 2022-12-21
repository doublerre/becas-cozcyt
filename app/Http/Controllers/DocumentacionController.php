<?php

namespace App\Http\Controllers;

use App\Models\Documentacion;
use Illuminate\Http\Request;

class DocumentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$documentacion = Documentacion::all();
        //return view('convocatoria.add', ['documentacion'=>$documentacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documentacion  $documentacion
     * @return \Illuminate\Http\Response
     */
    public function show(Documentacion $documentacion)
    {
        //Transoformación de los requerimientos que estan divididos por comas a un array
        $requisitos = explode(', ',$documentacion->requisitos);

        //Verificaición de si el ultimo requerimiento está mal
        if(end($requisitos) == ""){
            //Eliminaicón del requerimiento vacio
            $requisitos = array_diff($requisitos, array(""));
        }

        //Envio de requerimientos
        return view('convocatoria.add', compact('documentacion','requisitos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentacion  $documentacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentacion $documentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentacion  $documentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentacion $documentacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentacion  $documentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentacion $documentacion)
    {
        //
    }
}
