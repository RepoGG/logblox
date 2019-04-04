<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
     protected $fillable = [
    	'lab_title',
    	'lab_description',
    	'lab_termin',
    	'lab_category',
    	'lab_zalacznik'
    ];
}
