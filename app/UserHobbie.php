<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHobbie extends Model
{
    protected $table = 'hobbies_user';

    //Relacion muchos a 1
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }


    //Relacion muchos a 1
    public function hobbie(){
        return $this->belongsTo('App\Hobbie', 'hobbie_id');
    }
}
