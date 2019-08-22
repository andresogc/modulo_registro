<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHobbie;
use App\Hobbie;
use App\User;

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


    public function edit(){
        return view('admin.userEdit');
    }


    public function findForm(){
        return view('admin.userFind');
    }

    public function find(Request $request){
        //recibir usuario a buscar
        $search=$request->input('search');

        //Buscar usuario en la base de datos
        $user=User::where('email', $search)->get();

        //$id = $user[0]->id;

        return view('admin.userEdit',[
            'user'=>$user,
        ]);
    }



    public function update(Request $request){

        $id=$request->input('id');

        $user=User::where('id', $id)->get();


        //validar campos
        $validate = $this->validate($request,[
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|unique:users,username,'.$id,
            'city' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email,'.$id,
            'profile' => 'required|string|max:50'
        ]);


        //obtener datos del formulario de editar usuario
        $name=$request->input('name');
        $username=$request->input('username');
        $city=$request->input('city');
        $email=$request->input('email');
        $profile=$request->input('profile');


        //asignar datos al usuario que se esta editando
        //$user=new User;

        $user[0]->name=$name;
        $user[0]->username=$username;
        $user[0]->city=$city;
        $user[0]->email=$email;
        $user[0]->profile=$profile;


        //Actualizar datos en la tabla users
        $user[0]->update();


        return redirect()->route('home')
                        ->with(['message'=>'Usuario '.$user[0]->name .' actualizado correctamente']);

    }

}
