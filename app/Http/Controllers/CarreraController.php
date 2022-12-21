<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Institucion;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        return view('carrera.index', ['carreras'=>$carreras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Carrera $carrera, Institucion $instituciones)
    {
        $instituciones = Institucion::all();
        return view('carrera.create', compact('carrera', 'instituciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Carrera::create($data);
        return redirect()->route('carreras.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera, Institucion $instituciones)
    {
        $instituciones = Institucion::all();
        return view('carrera.create', compact('carrera', 'instituciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        $data = $request->all();
        $carrera->fill($data);
        $carrera->save();
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        try{
            $carrera->delete();
        }catch(\Exception $e){
            // 
        }
        return redirect()->route('carreras.index');
    }
}
