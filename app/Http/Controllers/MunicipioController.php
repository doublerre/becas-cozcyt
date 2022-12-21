<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //$Municipios = Municipio::paginate(10); // selecciono todos de la tabla y los guardo en una variable
        //dd($Municipios);//Listado provisional

        $Municipios=Municipio::paginate(10);
        return view('municipio.index', compact('Municipios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('municipio.create');
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
        // $data = $request->all();
        // if($request->has('image')){
        //     $path = $request->image->store('images');
        //     $data['image']=$path;
        // }
        // Cuatrimestre::create($data);
        // return redirect()->route('municipio.index')->with(['status'=>'Success','color'=>'green-500','message'=>'Municipio created succesfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        //
        // return view('municipios.create',compact('municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        //
        // $data =$request->all();
        // $municipio->fill($data);
        // $municipio->save();
        // return redirect()->route('municipio.index')->with(['status'=>'Success','color'=>'blue-500','message'=>'Municipio update successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        //
        // try{


        //     $municipio->delete();
        //     }catch(\Exception $e){
        //         return redirect()->route('municipio.index')->with(['status'=>'Succes','color'=>'red-700','message'=>'Municipio deleted succefuly']);
        // }

        // return redirect()->route('municipio.index');
    }
}
