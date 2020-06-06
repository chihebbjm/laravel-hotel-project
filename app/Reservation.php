<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $fillable = ['nom', 'prenom','telephone','email'
    ,'demande_supp','date_arrivee','date_depart','nb_adultes','nb_enfants'];
       
}
