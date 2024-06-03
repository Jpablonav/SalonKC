@extends('/admin/plantilla/appadmin')

@section('titulo', 'TablaCita')

@section('contenido')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-10 text-center">
            <a class="btn btn-primary btn-destello btn-salto" href="/administrador/citas/formulario" role="button">Nuevo Registro</a>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Cita ID</th>
                            <th scope="col">Empleado ID</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($citas as $cita)
                        <tr>
                            {{-- <th scope="row">1</th> --}}
                            <td>{{ $cita->cita_id}}</td>
                            <td>{{ $cita->empleado_id}}</td>
                            <td>{{ $cita->fecha}}</td>
                            <td>{{ $cita->hora}}</td>
                            <td><a href="/citas/{{ $cita->cita_id}}/editar">editar</a></td>
                            <td><a href="/citas/{{ $cita->cita_id}}">Borrar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-10 text-center">
            <a class="btn btn-primary btn-destello btn-salto" href="/administrador/citas/formulario" role="button">Nuevo Registro</a>
        </div>
    </div>
</div>
@endsection
