<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use App\Models\Carrera;
use App\Models\Convocatoria;
use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///////////////
        /* DATOS NECESARIOS PARA EL FILTRADO DE ESCUELA - CARRERA - MODALIDAD */
        //////////////

        $Users = DB::table('users')
        ->select(
            DB::raw("users.id AS 'idUser'"),
            DB::raw("users.genero AS 'genero'"),
            DB::raw("carreras_has_users.users_id AS 'ChU_idUser'"),
            DB::raw("carreras_has_users.carreras_id AS 'ChU_idCarrera'"),
            DB::raw("carreras.id AS 'idCarrera'"),
            DB::raw("instituciones.id AS 'idEscuela'"),
        )
        ->join("carreras_has_users", "users.id", "=" ,"carreras_has_users.users_id")
        ->join("carreras", "carreras_has_users.carreras_id", "=" ,"carreras.id")
        ->join("instituciones", "carreras.instituciones_id", "=" ,"instituciones.id")
        ->get();

        $Escuelas = Institucion::all();
        $Carreras = Carrera::all();
        $Convocatorias = Convocatoria::all();

        //////////////
        /* DATOS NECESARIOS PARA EL FLITRADO DE MUNICIPIOS Y ESTADOS */
        //////////////

        $UsMunEst = DB::table('users')
        ->select(
            DB::raw("users.id AS 'userID'"),
            DB::raw("users.genero AS 'userGen'"),
            DB::raw("municipios.id AS 'munID'"),
            DB::raw("municipios.nombre AS 'userMun'"),
            DB::raw("estados.id AS 'estID'"),
            DB::raw("estados.nombre AS 'userEst'")
        )
        ->join("municipios_has_users","users.id","=", "municipios_has_users.users_id")
        ->join("municipios","municipios_has_users.municipios_id","=", "municipios.id")
        ->join("estados", "municipios.estados_id","=","estados.id")
        ->get();

        $Estados = Estado::all();
        $Municpios = Municipio::all();

        //////////////
        /* ENVIO DE DATOS A LA INTERFAZ/VISTA DE ESTADISTICA */
        //////////////

        return view('estadistica.index', [
            'modalidades'=>$Convocatorias,
            'usuarios'=>$Users,
            'escuelas'=>$Escuelas,
            'carreras'=>$Carreras,
            'estados'=>$Estados,
            'municipios'=>$Municpios,
            'UsMunEst'=>$UsMunEst
        ]);
    }
}
