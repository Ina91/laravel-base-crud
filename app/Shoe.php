<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    //metodo per inserire velocemente i dati in store nel MyController in qst caso : ShoeController
    protected $fillable = [
        'modello', 'marca', 'taglia',
    ];
}
