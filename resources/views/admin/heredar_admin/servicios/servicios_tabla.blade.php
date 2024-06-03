@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaServicios')

@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="/administrador/servicios/form" role="button">Nuevo Registro</a>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Servicio ID</th>
                                <th scope="col">Nombre del servicio</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Duracion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Producto ID</th>
                                {{-- <th scope="col">Imagen</th> --}}
                                <th scope="col">editar</th>
                                <th scope="col">borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicios as $servicio)
                                <tr>
                                    {{-- <th scope="row">1</th> --}}
                                    <td>{{ $servicio->servicio_id}}</td>
                                    <td>{{ $servicio->nombre_servicio}}</td>
                                    <td>{{ $servicio->descripcion}}</td>
                                    <td>{{ $servicio->duracion}}</td>
                                    <td>{{ $servicio->precio}}</td>
                                    <td>{{ $servicio->producto_id}}</td>
                                    {{-- <td><img src="/storage/{{$servicio->imagen}}" alt="{{$servicio->imagen}}" width="100px"></td> --}}
                                    <td><a href="/servicios/{{ $servicio->servicio_id}}/editar">editar</a></td>
                            <td><a href="/servicios/{{ $servicio->servicio_id}}">Borrar</a></td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="container text-center mt-3 mb-3">
                        <a class="btn btn-primary btn-destello btn-salto" href="/administrador/servicios/form" role="button">Nuevo Registro</a>
                </div>
            </div>
        </div>
    </div>
@endsection
