<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\DatosPerfil;
use App\Models\Estado;
use App\Models\Institucion;
use App\Models\Municipio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatosPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datosperfil.index');
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
     * @param  \App\Models\DatosPerfil  $datosPerfil
     * @return \Illuminate\Http\Response
     */
    public function show(DatosPerfil $datosPerfil, User $users, $id)
    {
        $datosPerfil = User::find($id);
        $estados = Estado::all();
        $municipios = Municipio::all();
        $instituciones = Institucion::all();
        $carreras = Carrera::all();
        return view('datosperfil.index', compact('datosPerfil', 'estados', 'municipios', 'instituciones', 'carreras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatosPerfil  $datosPerfil
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosPerfil $datosPerfil)
    {
        // $users = User::where('id', '=', Auth::user()->id);
        // $estados = Estado::all();
        // $municipios = Municipio::all();
        // $instituciones = Institucion::all();
        // $carreras = Carrera::all();
        // return view('datosperfil.index', compact('users', 'estados', 'municipios', 'instituciones', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatosPerfil  $datosPerfil
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, DatosPerfil $datosPerfil, $id)
    // {
    //     // $users = User::where('id', '=', Auth::user()->id);
    //     $datosPerfil = User::find($id);
    //     $data = $request->all();
    //     $datosPerfil->fill($data);
    //     $datosPerfil->save();
    //     return back();
    // }

    public function actua(Request $request, DatosPerfil $datosPerfil, $id)
    {
        $datosPerfil = User::find($id);
        $data = $request->all();
        $datosPerfil->fill($data);
        $datosPerfil->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatosPerfil  $datosPerfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosPerfil $datosPerfil)
    {
        //
    }
}
