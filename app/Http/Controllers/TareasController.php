<?php

namespace App\Http\Controllers;

use App\Models\Tareas\tareas;
use Illuminate\Http\Request;
use Session;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $sess = Session::get('logged');
        if($sess == 1){
            $data['tareas'] = tareas::Paginate(5);
            return view('tareas.index' , $data);
        }else{
            return view('auth.login');

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sess = Session::get('logged');
        if($sess == 1){
            return view('tareas.create');
        }else{
            return view('auth.login');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        tareas::insert($data);
        return redirect('tareas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tareas\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show(tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tareas\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sess = Session::get('logged');
        if($sess == 1){
            $tarea = tareas::findOrFail($id);
            return view('tareas.edit' , compact('tarea'));
        }else{
            return view('auth.login');

        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tareas\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token','_method');
        tareas::Where('id','=',$id)->update($data);
        return redirect('tareas'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tareas\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tareas::Destroy($id);
        return redirect('tareas');
    }
}
