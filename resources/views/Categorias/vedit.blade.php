@extends('layout.general')
@section('breadcum')
<li class="active">Cuenta</li>    
@endsection
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
@endsection
@section('content')
<div>
    <form action="">
        <h4 class="titulos">Nombre de la sección:</h4>
        <input type="text"  class="form-control" required autofocus name="nomCat">
        
        <h4 class="titulos">Descripción de la sección:</h4>
        <input type="text"  class="form-control" required autofocus name="nomCat">
        <button class="boton_personalizado-enviar">Enviar</button>
    </form>
</div>
@endsection