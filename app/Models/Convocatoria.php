<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Convocatoria extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'convocatoria';
    protected $primaryKey = 'id';
    
    protected $fillable = [ 'nombre', 'descripcion', 'requisitos', 'imagen'];
}
