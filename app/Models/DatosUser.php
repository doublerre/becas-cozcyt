<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosUser extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'rfc', 'ap_paterno', 'ap_materno', 'curp', 'fecha_n', 'genero',  'email', 'edad', 'g_etnico', 'colonia', 'calle', 'numero', 'codigo_postal', 'tel_cel', 'tel_fijo', 'grdo', 'promedio', 'estado', 'municipio', 'institucion', 'carrera'];

    public function instituciones_perfil ()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function carreras_perfil ()
    {
        return $this->belongsTo(Carrera::class);
    }
}
