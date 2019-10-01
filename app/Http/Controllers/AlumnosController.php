<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;
//Incluimos el modelo Alumno
use Crud\Alumno;

class AlumnosController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Enviamos a la vista del formulario para agregar nuevos alumnos
        return view('alumnos.form_add');
    }

    /**
     * Almacenar un recurso recién creado en el almacenamiento de la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $alumno = new Alumno();
        $alumno->nombre = $request->input('txtNom');
        $alumno->paterno = $request->input('txtPaterno');
        $alumno->materno = $request->input('txtMaterno');
        $alumno->edad = $request->input('txtEdad');
        $alumno->curso = $request->input('txtCurso');
        $alumno->save();

        return redirect(route('alumnos.index'));
    }

    /**
     *  Mostrar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //la funcion firstOrFail() lanza una excepcion si no encuentra el modelo y su slug
        $alumn = Alumno::find($id);
        return view('alumnos.edit')->with('alumn' , $alumn);
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizamos todo lo que venga del recurso
        //la funcion firstOrFail() lanza una excepcion si no encuentra el modelo y su slug
        $alumno = Alumno::where('id','=',$id)->firstOrFail();
        $alumno->nombre = $request->input('txtNom');
        $alumno->paterno = $request->input('txtPaterno');
        $alumno->materno = $request->input('txtMaterno');
        $alumno->edad = $request->input('txtEdad');
        $alumno->curso = $request->input('txtCurso');
        //Guaradamos los nuevos datos
        $alumno->save();
        //La funcion redirect nos redirecciona a la ruta que le indiquemos
        return redirect(route('alumnos.index'))->with('status','Accion exitosa');
    }

    /**
     * Eliminar el recurso especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //la funcion firstOrFail() lanza una excepcion si no encuentra el modelo y su slug
        $alumn = Alumno::where('id','=',$id)->firstOrFail();
        //Eliminamos de la base de datos
        $alumn->delete();
        //Redireccionamos a la vista principal
        return redirect(route('alumnos.index'))->with('status','Accion exitosa');
    }
}
