<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BapModel extends Model
{
    public function bap(){
        return $this->belongsTo('App\User');
    }

}
