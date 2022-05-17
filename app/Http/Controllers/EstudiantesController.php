<?php

namespace App\Http\Controllers;

use App\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Estudiantes::latest()->paginate(5);
    
        return view('estudiantes.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'codigo'=> 'required',
            'nombres'=> 'required', 
            'apellidos'=> 'required',
            'sexo'=> 'required', 
            'carrera'=> 'required'
        ]);
    
        Estudiantes::create($request->all());
     
        return redirect()->route('estudiantes.index')
                        ->with('success','Creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiantes $estudiantes,$id)
    {
        $estudiantes=Estudiantes::find($id);
        return view('estudiantes.show',compact('estudiantes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes= Estudiantes::findOrFail($id);

        return view('estudiantes.edit',compact('estudiantes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes $estudiantes, $id)
    {
        $request->validate([
            
            'codigo'=> 'required',
            'nombres'=> 'required', 
            'apellidos'=> 'required',
            'sexo'=> 'required', 
            'carrera'=> 'required'
        ]);

       //dd($request->all());
       

        $estudiantes->where('id', $id)->update($request->except(['_token','_method']));
    
        return redirect()->route('estudiantes.index')
                        ->with('success','Estudiante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiantes,$id)
    {
        $estudiantes->where("id",$id)->delete();
    
        return redirect()->route('estudiantes.index')
                        ->with('success','Eliminado');
    }
}
