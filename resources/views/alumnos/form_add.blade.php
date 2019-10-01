<!-- Heredamos las plantillas blade de layout -->
@extends('layout.main')
@extends('layout.navbar')

@section('title', 'Alumnos')
@section('formadd')
    <div class="mt-5">
        <!-- Enviamos el formulario con todos los datos a la ruta del controllador a la funcion store para 
            poder agregar datos a la base de datos -->
        <form method="POST" action="{{route('alumnos.store')}}" class="form-group">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Alumno</label>
                <input type="text" class="form-control" name="txtNom" aria-describedby="emailHelp" placeholder="Nombre del Alumno">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido Paterno</label>
                <input type="text" class="form-control" name="txtPaterno" aria-describedby="emailHelp" placeholder="Apellido Paterno">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido Materno</label>
                <input type="text" class="form-control" name="txtMaterno" aria-describedby="emailHelp" placeholder="Apellido Materno">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Edad</label>
                <input type="text" class="form-control" name="txtEdad" aria-describedby="emailHelp" placeholder="Edad">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Curso</label>
                <input type="text" class="form-control" name="txtCurso" aria-describedby="emailHelp" placeholder="Curso">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection