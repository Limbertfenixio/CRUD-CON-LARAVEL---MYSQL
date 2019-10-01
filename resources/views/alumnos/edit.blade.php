<!-- Heredamos las plantillas blade de layout -->
@extends('layout.main')
@extends('layout.navbar')
@section('title', 'Alumnos')
@section('content')


    <div class="container mt-5">
        <form method="POST" action="{{route('alumnos.update', $alumn->id)}}">
            <!-- Enviamos los datos a la ruta del controlador a la funcion update con el metodo PUT/PATCH 
                Le enviamos como parametro el id del alumno-->
            @method('PUT')
            @csrf
            <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" class="form-control" name="txtId" value="{{$alumn->id}}" readonly>
            </div>
            <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="txtNom" value="{{$alumn->nombre}}">
                </div>
                <div class="form-group">
                    <label for="">Paterno</label>
                    <input type="text" class="form-control" name="txtPaterno" value="{{$alumn->paterno}}">
                </div>
                <div class="form-group">
                    <label for="">Materno</label>
                    <input type="text" class="form-control" name="txtMaterno" value="{{$alumn->materno}}">
                </div>
                
                <div class="form-group">
                    <label for="">Edad</label>
                    <input type="text" class="form-control" name="txtEdad" value="{{$alumn->edad}}">
                </div>
                <div class="form-group">
                    <label for="">Curso</label>
                    <input type="text" class="form-control" name="txtCurso" value="{{$alumn->curso}}">
                </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection