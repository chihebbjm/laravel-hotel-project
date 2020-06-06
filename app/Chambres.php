<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambres extends Model
{
    protected $fillable = ['nom', 'description','image','prix_pax',"type","status"];

    public function commodites(){
        return $this->belongsToMany('App\Commodites');
    }

}
