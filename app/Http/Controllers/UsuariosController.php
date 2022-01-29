<?php

namespace App\Http\Controllers;

use App\Models\Usuarios\usuarios;
use Illuminate\Http\Request;
use Session;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->except('_token');
        $user = usuarios::Where('nombre', '=', $data['nombre'])->Where('contraseña', '=', md5($data['contraseña']))->first();
        if(!empty($user)){
            Session::put('logged',"1");
            return redirect('tareas');
        }else{
            return redirect('login');
        }
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
        $data = $request->except('_token');
        $data['contraseña'] = md5($data['contraseña']);
        usuarios::insert($data);
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {      
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
