<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Http\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $config= Configuracion::all();
        return view('configuracion.create', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Configuracion $configuracion)
    {
        //
        return view('configuracion.create', compact('configuracion'));
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
        $data = $request->all();
        // $data['configuracion'] = implode(", ", $request->configuracion);


        if ($request->has('image')){
            $path = $request->image->store('imagen');
            $data['imagen']=$path;
        }
        Configuracion::create($data);
        return redirect()->route('convocatorias.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Configuracion $configuracion)
    {
        //
        return view('configuracion.create', compact("configuracion"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracion  $configuracion)
    {
        //
        return view('configuracion.create', compact('cofiguracion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracion $configuracion)
    {
        //
        // $config= Configuracion::all();
        $data = $request->all();
        $configuracion->fill($data);
        $configuracion->save();
        return redirect()->route('configuracion.create', compact('configuracion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuracion $configuracion)
    {
        //
        try {
            $configuracion->delete();
        } catch (\Exception $e) {
            //
        }
        return redirect()->route('configuracion.create');
    }
}
