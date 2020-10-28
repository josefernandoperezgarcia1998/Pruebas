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

@if( $categoria_id ?? '1' )
            Nombre de la sección: electrónica
            Descripción de la sección: Descripción electrónica

@elseif($categoria_id ?? '2')
            Nombre de la sección: electrodomesticos
            Descripción de la sección: Descripción electrodomesticos
@elseif( $categoria_id ?? '3')
            Nombre de la sección: ropa
            Descripción de la sección: Descripción ropa
@else
            No existe
@endif
@endsection