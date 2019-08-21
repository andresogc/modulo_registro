<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\UserHobbie;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()    {


        $userHobbie = UserHobbie::OrderBy('user_id', 'desc')->get();

        return view('home',[
            'hobbies' => $userHobbie
        ]);
    }



}
