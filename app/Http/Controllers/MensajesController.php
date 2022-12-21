<?php

namespace App\Http\Controllers;

use App\Models\mensajes;
use Illuminate\Http\Request;
use App\Models\SendEmailController;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mensajes.index');
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
     * @param  \App\Models\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function show(mensajes $mensajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function edit(mensajes $mensajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mensajes $mensajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensajes $mensajes)
    {
        //
    }

    public function EnviarCorreo(mensajes $mensajes){
        // return view('welcome');
        $destinatario = "cruzlopez999@gmail.com";
        $nombre = "Cruz Isaias Lopez";
        Mail::to($destinatario)->send(new NotifyMail($nombre));
    }
}
