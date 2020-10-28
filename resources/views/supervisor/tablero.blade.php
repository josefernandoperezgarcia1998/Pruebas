@extends('layout.dashboard')


@section('contenido')

<style>
    .boton_personalizado-editar{
  text-decoration: none;
  padding: 5px;
  font-weight: 600;
  font-size: 18px;
  color: #212121;
  background-color: #a5d6a7;
  border-radius: 6px;
  border: 2px solid #66bb6a;
}
.boton_personalizado-editar:hover{
  color: #1883ba;
  background-color: #c8e6c9;
}

.boton_personalizado-mostrar{
  text-decoration: none;
  padding: 5px;
  font-weight: 600;
  font-size: 18px;
  color: #212121;
  background-color: #fff59d;
  border-radius: 6px;
  border: 2px solid #ffee58;
}
.boton_personalizado-mostrar:hover{
  color: #1883ba;
  background-color: #fffde7;
}

.boton_personalizado-eliminar{
  text-decoration: none;
  padding: 5px;
  font-weight: 600;
  font-size: 18px;
  color: #212121;
  background-color: #e57373;
  border-radius: 6px;
  border: 2px solid #f44336;
}
.boton_personalizado-eliminar:hover{
  color: #1883ba;
  background-color: #ffcdd2;
}

.boton_personalizado-agregarCat{
  text-decoration: none;

  font-weight: 200;
  font-size: 18px;
  color: #212121;
  background-color: #b3e5fc;
  border-radius: 6px;
  border: 2px solid #4fc3f7;
  width:1080px;
}
.boton_personalizado-agregarCat:hover{
  color: #1883ba;
  background-color: #e1f5fe;
}
</style>
<a href="/Categorias/create"><button class="boton_personalizado-agregarCat">AGREGAR CATEGORÍA</button></a>
<div>
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>NOMBRE</th>
              <th>PRODUCTOS</th>
              <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Electrónica</td>
              <td>3</td>
              <td>
              <a href="Categorias/{categoria}/edit"><button class="boton_personalizado-editar">EDITAR</button></a>
              <a href="Categorias/{ ({{ $categoria_id ?? '1' }}) }"><button class="boton_personalizado-mostrar">MOSTRAR</button></a>
              <a href="Categorias/{categoria}"><button class="boton_personalizado-eliminar">ELIMINAR</button></a></td>
            </tr>
            <tr>
              <td>Electrodomésticos</td>
              <td>3</td>
              <td>
              <a href="Categorias/{categoria}/edit"><button class="boton_personalizado-editar">EDITAR</button></a>
              <a href="Categorias/{ ({{ $categoria_id ?? '2' }}) }"><button class="boton_personalizado-mostrar">MOSTRAR</button></a>
              <a href="Categorias/{categoria}"><button class="boton_personalizado-eliminar">ELIMINAR</button></a></td>
            </tr>
            <tr>
              <td>Ropa</td>
              <td>3</td>
              <td>
              <a href="Categorias/{categoria}/edit"><button class="boton_personalizado-editar">EDITAR</button></a>
              <a href="Categorias/{ ({{ $categoria_id ?? '3' }}) }"><button class="boton_personalizado-mostrar">MOSTRAR</button></a>
              <a href="Categorias/{categoria}"><button class="boton_personalizado-eliminar">ELIMINAR</button></a></td>
             </tr>
          </tbody>
        </table>	
</div>
</div>


@endsection