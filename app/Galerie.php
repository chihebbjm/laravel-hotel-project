<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    protected $table = 'galerie';

    protected $fillable = ['titre', 'tag','image'];
    
}
