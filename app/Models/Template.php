<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $table = 'template';
    protected $fillable = ['id', 'barra_superior', 'texto_superior', 'color_fondo', 'color_texto', 'logo', 'icono', 'redes_sociales', 'created_at', 'updated_at'];
}
