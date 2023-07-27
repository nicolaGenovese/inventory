<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventario';

    protected $fillable = [
        'nome_prodotto',
        'tipologia_prodotto',
        'quantita',
        'package',
        'prezzo',
        'notes'
    ];
}
