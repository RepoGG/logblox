<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
    	'tresc_zadania',
    	'kwalifikacja',
    	'odpowiedz_a',
    	'odpowiedz_b',
    	'odpowiedz_c',
    	'odpowiedz_d',
    	'poprawna_odpowiedz',
    	'testimage'
    ];
}
