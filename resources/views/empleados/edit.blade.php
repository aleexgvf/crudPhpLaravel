<form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field() }}
{{method_field('PATCH')}}

<label for="nombre">{{'Nombre'}}</label>
<input type="text", name="nombre", id="nombre", value="{{ $empleado->nombre }}">
<br/>
<br/>

<label for="apellidoPaterno">{{'Apellido Paterno'}}</label>
<input type="text", name="apellidoPaterno", id="apellidoPaterno", value="{{$empleado->apellidoPaterno}}">
<br/>
<br/>

<label for="apellidoMaterno">{{'Apellido Materno'}}</label>
<input type="text", name="apellidoMaterno", id="apellidoMaterno", value="{{$empleado->apellidoMaterno}}">
<br/>
<br/>

<label for="edad">{{'edad'}}</label>
<input type="number", name="edad", id="edad", value="{{$empleado->edad}}">
<br/>
<br/>

<label for="correo">{{'correo'}}</label>
<input type="email", name="correo", id="correo", value="{{$empleado->correo}}">
<br/>
<br/>

<label for="foto">{{'foto'}}</label>
<br/>
<img src="{{ asset('storage').'/'.$empleado->foto }}" alt="" width="200">
<br/>
<input type="file", name="foto", id="correo", values="">
<br/>
<br/>
<input type="submit" value="editar">
</form>