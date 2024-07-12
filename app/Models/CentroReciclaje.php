<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroReciclaje extends Model
{
    use HasFactory;

    // Si la tabla no sigue las convenciones de nombres de Laravel, define el nombre de la tabla explícitamente
    // protected $table = 'nombre_de_tu_tabla';

    // Define los campos que pueden ser asignados masivamente
    protected $fillable = ['nombre', 'ubicacion', 'materiales_aceptados'];
}
