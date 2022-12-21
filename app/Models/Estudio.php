<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'estudio_socioeconomico';

    protected $fillable = [
        'ocupacion',
        'trabajas',
        'telefono_trabajo',
        'horario_trabajo',
        'sueldo_mensual',
        'vives_con',
        'tiempo_viviendo',
        'personas_viviendo',
        'status_casa',
        'material_piso',
        'cantidad_recamaras',
        'cantidad_banos',
        'tiene_sala',
        'tiene_cocina_independiente',
        'servicios_cuenta',
        'electrodomesticos_en_casa',
        'numero_autos',
        'seguro_medico',
        'transporte_utilizado',
        
    ];

}