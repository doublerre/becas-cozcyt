<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Convocatoria $convocatoria)
    {
        $requi = [" "];
        return view('convocatoria.create', compact('convocatoria', 'requi'));
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
        $data['requisitos'] = implode(", ", $request->requisitos);

        //CREACIÓN DE LA CARPETA CON EL AÑO 
        $pathYear = date('Y');
        $validarPathYear = Storage::disk('public')->exists($pathYear);

        if (!$validarPathYear) {
            Storage::disk('public')->makeDirectory($pathYear);
        }

        // CREACIÓN DE LA CARPETA PARA LA CONVOCATORIA
        $pathConvocatoria = $request->input('nombre');
        $validarPathConvocatoria = Storage::disk('public')->exists($pathYear . '/' . $pathConvocatoria);

        if (!$validarPathConvocatoria) {
            Storage::disk('public')->makeDirectory($pathYear . '/' . $pathConvocatoria);
        }

        // $request-> validate([
        //     'file'=> 'required|image|max:2048'
        // ]);

        // if($request->has('imagen')){
        //     $imagen = $request ->file("imagen");
        //     $nombreImagen = Str::slug($request-> nombre).".".$imagen-> guessExtension();
        //     $ruta = public_path("imagen/");
        //     $imagen -> move($ruta, $nombreImagen);
        // };
        /*
        if($request->has('imagen')){
            $path = $request->imagen->store('imagen');
            $data['imagen']=$path;
        }
        */

        //Guardado de una imagen
        if ($request->hasFile('imagen')) {
            $nombreArchivo = time() . '-' . $request->file('imagen')->getClientOriginalName();
            $destino = "imagen";
            $subidaImagen = $request->file('imagen')->move($destino, $nombreArchivo);
            $data['imagen'] = $destino . '/' . $nombreArchivo;
        }

        Convocatoria::create($data);
        return redirect()->route('convocatorias.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function show(Convocatoria $convocatoria)
    {
        return view('convocatoria.show', compact("convocatoria"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Convocatoria $convocatoria)
    {
        $requi = explode(", ", $convocatoria->requisitos);
        return view('convocatoria.create', compact('convocatoria', 'requi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convocatoria $convocatoria)
    {
        $data = $request->all();
        $data['requisitos'] = implode(", ", $request->requisitos);
        $pathYear = date('Y');

        // CREACIÓN DE LA CARPETA PARA LA CONVOCATORIA
        $pathConvocatoria = $request->input('nombre');
        $validarPathConvocatoria = Storage::disk('public')->exists($pathYear . '/' . $pathConvocatoria);

        if (!$validarPathConvocatoria) {
            Storage::disk('public')->makeDirectory($pathYear . '/' . $pathConvocatoria);
        }


        // if($request->has('imagen')){
        //     $path = $request->imagen->store('imagen');
        //     $data['imagen']=$path;
        // }
        $convocatoria->fill($data);
        $convocatoria->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convocatoria $convocatoria)
    {
        //
        try {
            $convocatoria->delete();
        } catch (\Exception $e) {
            //
        }
        return redirect()->route('dashboard');
    }
    public function updateconvocatoria()
    {
        return view('convocatoria.update', compact('convocatoria'));
    }

    public function viewTrash()
    {
        $convo = Convocatoria::onlyTrashed()->get();
        return view('convocatoria.trash', compact('convo'));
    }

    public function restore($id)
    {
        $convo = Convocatoria::onlyTrashed()->find($id);
        $convo->restore();
        return redirect()->route('convocatoria.habilitar');
    }
}
