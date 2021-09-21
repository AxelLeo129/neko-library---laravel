<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursore extends Model
{
    use HasFactory;
    protected $table = 'cursore';
    protected $fillable = ['id', 'immagine_sfondo', 'immagine_prodotto', 'tipo', 'stile_immagine', 'stile_testo', 'titolo1', 'titolo2', 'titolo3', 'pulsante', 'url', 'created_at', 'updated_at'];
}
