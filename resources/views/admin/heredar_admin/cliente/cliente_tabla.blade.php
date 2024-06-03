@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaCliente')

@section('estilos')
<style>
    .btn-destello:hover {
        animation: destello 0.5s infinite alternate;
    }

    @keyframes destello {
        from {
            box-shadow: 0 0 5px 1px #fff, 0 0 10px 1px #fff, 0 0 15px 1px #fff, 0 0 20px 1px #00ffff, 0 0 25px 1px #00ffff, 0 0 30px 1px #00ffff, 0 0 35px 1px #00ffff;
        }

        to {
            box-shadow: 0 0 10px 1px #fff, 0 0 20px 1px #fff, 0 0 30px 1px #fff, 0 0 40px 1px #00ffff, 0 0 50px 1px #00ffff, 0 0 60px 1px #00ffff, 0 0 70px 1px #00ffff;
        }
    }

    .btn-salto:hover {
        animation: salto 0.5s infinite alternate;
    }

    @keyframes salto {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-5px);
        }
    }
</style>
@endsection

@section('contenido')
<div class="container text-center mt-3">
    <a class="btn btn-primary btn-destello btn-salto" href="/administrador/clientes/create" role="button">Nuevo Registro</a>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Cliente ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Email</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">editar</th>
                            <th scope="col">Borrar</th>
            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            {{-- <th scope="row">1</th> --}}
                            <td>{{ $cliente->clienteid}}</td>
                            <td>{{ $cliente->nombre}}</td>
                            <td>{{ $cliente->telefono}}</td>
                            <td>{{ $cliente->direccion}}</td>
                            <td>{{ $cliente->email}}</td>
                            <td><img src="/storage/{{$cliente->imagen}}" alt="{{$cliente->imagen}}" width="100px"></td>
                            <td><a href="/clientes/{{ $cliente->clienteid}}/editar">editar</a></td>
                            <td><a href="/clientes/{{ $cliente->clienteid}}">Borrar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="container text-center mt-3 mb-3">
                    <a class="btn btn-primary btn-destello btn-salto" href="/administrador/clientes/create" role="button">Nuevo Registro</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

