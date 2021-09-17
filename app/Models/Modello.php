<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modello extends Model
{
    use HasFactory;
    protected $table = 'modello';
    protected $fillable = ['id', 'barra_alto', 'testo_alto', 'colore_sfondo', 'colore_testo', 'logo', 'icona', 'social_networks', 'created_at', 'updated_at'];
}
