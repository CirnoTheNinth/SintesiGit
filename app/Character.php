<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table ='characters';

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function states(){
        return $this->belongsToMany('App\State');
    }
}
