@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaProductos')

@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <a class="btn btn-primary" href="/administrador/productos/formulario" role="button">Nuevo Registro</a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Producto ID</th>
                                <th scope="col">Nombre del producto</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->producto_id}}</td>
                                    <td>{{ $producto->nombre_producto}}</td>
                                    <td>{{ $producto->nombre_marca}}</td>
                                    <td>{{ $producto->descripcion}}</td>
                                    <td>{{ $producto->nombre_categoria}}</td>
                                    <td>{{ $producto->precio}}</td>
                                    <td>{{$producto->cantidad}}</td>
                                    <td><img src="/storage/{{$producto->imagen}}" alt="{{$producto->imagen}}" width="100px"></td>
                                    <td><a href="/productos/{{ $producto->producto_id}}/editar">editar</a></td>
                                    <td><a href="/productos/{{ $producto->producto_id}}">Borrar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-10 text-center">
                <a class="btn btn-primary" href="/administrador/productos/formulario" role="button">Nuevo Registro</a>
            </div>
        </div>
    </div>
@endsection

