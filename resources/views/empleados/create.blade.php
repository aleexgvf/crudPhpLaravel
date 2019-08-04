<h1> create</h1>
<form action="{{url('/empleados')}}", method="post" enctype="multipart/form-data">
{{csrf_field() }} 

<label for="nombre">{{'Nombre'}}</label>
<input type="text", name="nombre", id="nombre", values="">
<br/>
<br/>

<label for="apellidoPaterno">{{'Apellido Paterno'}}</label>
<input type="text", name="apellidoPaterno", id="apellidoPaterno", values="">
<br/>
<br/>

<label for="apellidoMaterno">{{'Apellido Materno'}}</label>
<input type="text", name="apellidoMaterno", id="apellidoMaterno", values="">
<br/>
<br/>

<label for="edad">{{'edad'}}</label>
<input type="number", name="edad", id="edad", values="">
<br/>
<br/>

<label for="correo">{{'correo'}}</label>
<input type="email", name="correo", id="correo", values="">
<br/>
<br/>

<label for="foto">{{'foto'}}</label>
<input type="file", name="foto", id="correo", values="">
<br/>
<br/>

<input type="submit" value="agregar">
</form>