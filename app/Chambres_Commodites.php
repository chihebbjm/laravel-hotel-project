<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambres_Commodites extends Model
{
    
    protected $table = 'chambres_commodites';
    protected $fillable = ['chambres_id', 'commodites_id'];

}
