<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;
use App\User;
use App\Entrega;

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
    public function index()
    {
        $id=auth()->user()->id;
        $entregas=Entrega::where('user_id',$id)->get();
        $bandera=0;
        $tareas=Tarea::all();
        return view('home',['tareas'=>$tareas,'entregas'=>$entregas,'bandera'=>$bandera]);
    }

  
}
