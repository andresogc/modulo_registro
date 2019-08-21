<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{
    protected $table = 'hobbies';

    //Relacion 1 a muchos/ One to many
    public function userhobbie(){
        return $this->hasMany('App\UserHobbie');

    }

    

}
