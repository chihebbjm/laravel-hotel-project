<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicite extends Model
{
    protected $table = 'publicite';

    protected $fillable = ['titre', 'proprietaire','image','link'];
}
