@extends('layout.general')
@section('breadcum')
<li class="active">Cuenta</li>    

@section('menu')
<ul class="nav menu">
    <li class="active">
        <a href="#"><em class="fa fa-dashboard">&nbsp;</em>Sucesos</a>
    </li>
    <li><a href="#"><em class="fa fa-calendar">&nbsp;</em>Propuestas</a></li>
    <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>Preguntas</a></li>
    <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>Estado de cuenta</a></li>
    <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
</ul>

@section('content')
<style>
    .boton_personalizado-enviar{
        margin-top: 25px;
  text-decoration: none;

  font-weight: 200;
  font-size: 18px;
  color: #212121;
  background-color: #b3e5fc;
  border-radius: 6px;
  border: 2px solid #4fc3f7;
  width:100px;
}
.boton_personalizado-enviar:hover{
  color: #1883ba;
  background-color: #e1f5fe;
}

.titulos{
    font-weight: 600;
}
</style>
<div>
    <form action="">
        <h4 class="titulos">Nueva categoria:</h4>
        <input type="text"  class="form-control" required autofocus name="nomCat">
        
        <h4 class="titulos">Descripción de la categoria:</h4>
        <input type="text"  class="form-control" required autofocus name="nomCat">
        <button class="boton_personalizado-enviar">Enviar</button>
    </form>
</div>
@endsection