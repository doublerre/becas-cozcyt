<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Institucion extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = 'instituciones';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'puntos'];
}
