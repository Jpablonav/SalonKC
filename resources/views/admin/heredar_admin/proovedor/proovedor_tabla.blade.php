@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaProovedor')

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
    <a class="btn btn-primary btn-destello btn-salto" href="/administrador/proovedor/create" role="button">Nuevo Registro</a>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Proovedor ID</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Repartidor</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proovedores as $proovedor)
                        <tr>
                            <td>{{$proovedor->id}}</td>
                            <td>{{$proovedor->marca}}</td>
                            <td>{{$proovedor->nombre}}</td>
                            <td>{{$proovedor->telefono}}</td>
                            <td>{{$proovedor->email}}</td>
                            <td><img src="/storage/{{$proovedor->imagen}}" alt="{{$proovedor->imagen}}" width="100px"></td>
                            <td><a href="/proovedor/{{$proovedor->id}}/editar">editar</a></td>
                            <td><a href="/proovedor/{{$proovedor->id}}">Borrar</a></td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                <div class="container text-center mt-3 mb-3">
                    <a class="btn btn-primary btn-destello btn-salto" href="/administrador/proovedor/create" role="button">Nuevo Registro</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

