<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodites extends Model
{
    protected $fillable = ['nom', 'description','icon'];

    public function chambres() {
        return $this->belongsToMany('App\Chambres');
    }
}
