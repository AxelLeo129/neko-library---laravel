<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sottocategoria extends Model
{
    use HasFactory;
    protected $table = 'sottocategorie';
    protected $fillable = ['id', 'nome', 'categoria_id', 'rotta', 'created_at', 'updated_at'];
}
