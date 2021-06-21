<?php

namespace App\Http\Controllers;

use App\Models\ListaDeCalificaciones;
use Illuminate\Http\Request;

class ListaDeCalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['listas']=ListaDeCalificaciones::paginate(5);
        return view('lista.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'numeroboleta' => 'required|integer',
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'calificacion1' => 'required|integer',
            'calificacion2' => 'required|integer',
            'calificacion3' => 'required|integer',
            'total' => 'required|integer'
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
            'unique' => 'El :attribute ya existe'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosLista = request()->except('_token');
        ListaDeCalificaciones::insert($datosLista);
        //return response()->json($datosLista);
        return redirect('lista')->with('mensaje','Alumno agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListaDeCalificaciones  $listaDeCalificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(ListaDeCalificaciones $listaDeCalificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListaDeCalificaciones  $listaDeCalificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista=ListaDeCalificaciones::findOrFail($id);
        return view('lista.edit', compact('lista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListaDeCalificaciones  $listaDeCalificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosLista = request()->except(['_token','_method']);
        ListaDeCalificaciones::where('id','=',$id)->update($datosLista);

        $lista=ListaDeCalificaciones::findOrFail($id);
        return view('lista.edit', compact('lista'));        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListaDeCalificaciones  $listaDeCalificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ListaDeCalificaciones::destroy($id);
        return redirect('lista')->with('mensaje','Alumno eliminado con éxito');
    }
}
