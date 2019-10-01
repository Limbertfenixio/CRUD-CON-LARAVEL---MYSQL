<!-- Plantilla que se usa para mostrar todos los datos de la base de datos en una tabla -->
@section('tables')
<div class="m-5">
        <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Paterno</th>
                    <th scope="col">Materno</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Curso</th>
                  </tr>
                </thead>
                <tbody> 
                    <!-- Iteramos todos los objetos que tiene $alumnos en la variable $item -->
                    @foreach ($alumnos as $item)         
                        <tr>                
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->paterno}}</td>
                            <td>{{$item->materno}}</td>
                            <td>{{$item->edad}}</td>
                            <td>{{$item->curso}}</td>
                            <!-- Direccionamos a la ruda del controlador a la funcion edit y le pasamos el id del alumno -->
                            <td><a class="btn btn-warning" href="{{route('alumnos.edit', $item->id)}}" >Editar</a></td>
                            <td>
                            <form method="POST" action="/alumnos/{{$item->id}}" role="form">
                                <!-- Enviamos el id del alumno a la funcion destroy del controlador por el metodo DELETE -->
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>   
</div> 
@endsection