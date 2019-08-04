Pagina index

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>Correo</th>
        
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->foto }}" alt="" width="200">
            </td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellidoPaterno}}</td>
            <td>{{$empleado->apellidoMaterno}}</td>
            <td>{{$empleado->edad}}</td>
            <td>{{$empleado->correo}}</td>
            <td>
            <a href="{{url('/empleados/'.$empleado->id.'/edit')}}"> 
                Editar
            </a>
            || 

              <form method="post", action="{{url('/empleados/'.$empleado->id)}}">
              {{csrf_field() }}
              {{method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Eliminar Empleado?');">Eliminar</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>