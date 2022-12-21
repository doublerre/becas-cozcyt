<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\DatosUser;
use App\Models\Institucion;
use Illuminate\Http\Request;


class DatosUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $carreras = Carrera::all();
        // $instituciones = Institucion::all();
        // $users = DatosUser::all();
        // return view('profile.update-profile-information-form')->with(compact('users', 'instituciones', 'carrerasphp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('profile.update-profile-information-form', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // DatosUser::create($data);
        // return redirect()->route('profile.update-profile-information-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatosUser  $datosUser
     * @return \Illuminate\Http\Response
     */
    public function show(DatosUser $datosUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatosUser  $datosUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosUser $datosUser)
    {
        // return view('profile.update-profile-information-form', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatosUser  $datosUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosUser $datosUser)
    {
        // $data = $request->all();
        // $datosUser->fill($data);
        // $datosUser->save();
        // return redirect()->route('profile.update-profile-information-form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatosUser  $datosUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosUser $datosUser)
    {
        //
    }
}
