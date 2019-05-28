<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    const Store_reles = [
        'title' => 'required',
        'genre' => 'required',
        'director' => 'required',
        'storyline' => 'required',
        'date' => 'required'];
   
    protected $fillable = [
        'title','genre','director','storyline','date',
    ];
}
