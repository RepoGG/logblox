<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'termin',
    	'category',
    	'zalacznik',
    	'user_id'
    ];

    /**
    * Zadanie ma autora
    **/
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
