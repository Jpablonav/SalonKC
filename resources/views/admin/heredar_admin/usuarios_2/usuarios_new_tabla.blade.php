@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaUsuario')

@section('contenido')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <a class="btn btn-primary btn-destello btn-salto mb-3" href="/administrador/usuariosnew/formulario" role="button">Nuevo Registro</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Tipo de Status</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->Id}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->contraseña}}</td>
                            <td>{{$usuario->status}}</td>
                            <td><img src="/storage/{{$usuario->imagen}}" alt="{{$usuario->imagen}}" width="100px"></td>
                            <td><a href="/usuariosnew/{{ $usuario->Id}}/editar">Editar</a></td>
                            <td><a href="/usuariosnew/{{ $usuario->Id}}">Borrar</a></td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <a class="btn btn-primary btn-destello btn-salto mt-3" href="/administrador/usuarios/formulario" role="button">Nuevo Regs</a>
        </div>
    </div>
</div>
@endsection
