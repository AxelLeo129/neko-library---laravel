<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    use HasFactory;
    protected $table = 'prodotti';
    protected $fillable = ['id', 'categoria_id', 'sottocategoria_id', 'tipo', 'rotta', 'titolo', 'titolo_breve', 'descripzione', 'detagli', 'prezzo', 'copertina', 'visualizzazioni', 'visualizzazioni_gratuito', 'vendite', 'vendite_gratuito', 'offerto_categoria', 'offerto_sottocategoria', 'offerta', 'prezzo_offerta', 'sconto_offerta', 'immagine_offerta', 'fine_offerta', 'nuovo', 'peso', 'consegna', 'created_at', 'updated_at'];
}
