<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHobbie;
use App\Hobbie;

class UserController extends Controller
{

    public function addHobbie(){


        $Hobbie = Hobbie::OrderBy('id', 'desc')->get();

       /* return view('home',[
            'hobbies' => $userHobbie
        ]);*/

        return view('user.addHobbie',[
            'hobbies' => $Hobbie
        ]);
    }



    public function hobbieSave(request $request){
        //conseguir id del usuario
        $user=\Auth::user();
        $id=$user->id;


        //obtener datos del formulario de hobbies
        $hobbie=$request->input('hobbie');
        $hobbieAdd= Hobbie::where('id', $hobbie[0])->get();

        $name_hobbie=$hobbieAdd[0]->name_hobbie;
        $hobbie_id=$hobbieAdd[0]->id;

        //insertar hobbie sellecionado en la tabla UserHobbie
        $hobbieUser = new UserHobbie;
        $hobbieUser->user_id = $id;
        $hobbieUser->hobbie_id = $hobbie_id;
        $hobbieUser->save();

        return redirect()->route('addHobbie')
                        ->with(['message'=>'Pasatiempo agregado correctamente']);

    }


}
