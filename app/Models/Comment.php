<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function comment(){
        return $this->belongsTo('App\Models\User');
    }
//    protected $fillable = ['user_id', 'post_id', 'id', 'comment'];

}
