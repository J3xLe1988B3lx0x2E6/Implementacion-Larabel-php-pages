<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tarea;
use App\Entrega;
use Illuminate\Support\Facades\Auth; 


class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrega = new Entrega();
        $entrega->tarea_id = $request->tarea_id;
        $entrega->user_id = auth()->user()->id;

        $entrega->comments=$request->comments;

        $entrega->save();

        return redirect('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea=Tarea::findOrFail($id);
        return view('entregas.show',['tarea'=>$tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $entrega=Entrega::findOrFail($id);
        $entrega->comments=$request->comments;
        $entrega->update();

        return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cal($id)
    {
        $tarea=Tarea::findOrFail($id);
        $entregas=Entrega::all();
        return view('cal',['tarea'=>$tarea,'entregas'=>$entregas]);
    }

    public function comentarios()
    {
        $tarea=Tarea::all();
        $entregas=Entrega::all();
        return view('comentarios',['tarea'=>$tarea,'entregas'=>$entregas]);
    }
}
