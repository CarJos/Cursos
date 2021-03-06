<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
Use Session;
Use Redirect;

class exercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::all();

        return view('excercises.index', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('excercises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->input('nombre');
        $curso->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')) {
            $curso->imagen = $request->file('imagen')->store('public/cursos');
        }
        $curso->save();
        return Redirect::to("/cursos")->withSuccess('Curso creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        return view('excercises.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('excercises.edit', compact('curso'));
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
        $curso = Curso::find($id);
        $curso->fill($request->all());
        if ($request->hasFile('imagen')) {
            $curso->imagen = $request->file('imagen')->store('public/cursos');
        }
        $curso->save();
        return 'Curso actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        //retornamos la url pubica de la imagen
        $urlImagenBD = $curso->imagen;
        //remplazamos en dicha url la palabra public por la palabra storage ya que necesitamos la ruta absoluta
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        //le anexamos mediante la funcion public_path la ruta de la carpeta storage/app/public/cursos a la ruta de la imagen
        $rutaCompleta = public_path().$nombreImagen;
        //La funcion unlink elimina el archivo contenido en la ruta especificada
        unlink($rutaCompleta);
        //Por ultimo eliminamos el registro completo en la base de datos
        $curso->delete();
        return 'Eliminado';
    }


}
