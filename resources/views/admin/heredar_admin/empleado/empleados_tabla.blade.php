@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaEmpleados')

@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <a class="btn btn-primary" href="/administrador/empleados/formulario" role="button">Nuevo Registro</a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Empleado ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $empleado->empleadoid}}</td>
                                    <td>{{ $empleado->nombre}}</td>
                                    <td>{{ $empleado->especialidad}}</td>
                                    <td>{{ $empleado->telefono}}</td>
                                    <td><img src="/storage/{{$empleado->imagen}}" alt="{{$empleado->imagen}}" width="100px"></td>
                                    <td><a href="/empleados/{{ $empleado->empleadoid}}/editar">editar</a></td>
                                    <td><a href="/empleados/{{ $empleado->empleadoid}}">Borrar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-10 text-center">
                <a class="btn btn-primary" href="/administrador/empleados/formulario" role="button">Nuevo Registro</a>
            </div>
        </div>
    </div>
@endsection
