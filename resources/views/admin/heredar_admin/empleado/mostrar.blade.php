@extends('/admin/plantilla/appadmin')

@section('titulo', 'Empleados')

@section('contenido')
    <div class="container">
        <h1>Editar</h1>
        <form  class="needs-validation" novalidate method="POST" action="/empleados/{{$empleado->empleadoid}}">
            @csrf
            @method('DELETE')
            <div class="form-row">
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer143">Empleado ID</label>
                    <input type="number" class="form-control" id="validationServer143" placeholder="Ejemplo: 1"
                        name="empleado_id" required readonly value="{{ $empleado->empleadoid}}">
                    <div class="valid-feedback">
                        Empleado ID Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Empleado ID.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer153">Nombre</label>
                    <input type="text" class="form-control" id="validationServer153"
                        placeholder="Ejemplo: Ana" name="nombre" required readonly  value="{{$empleado->nombre}}">
                    <div class="valid-feedback">
                        Nombre Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Nombre.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer163">Especialidad</label>
                    <input type="text" class="form-control" id="validationServer163"
                        placeholder="Ejemplo: Peluquero" name="especialidad" required readonly value="{{$empleado->especialidad}}">
                    <div class="valid-feedback">
                        Especialidad Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Especialidad.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer173">Teléfono</label>
                    <input type="tel" class="form-control" id="validationServer173"
                        placeholder="Ejemplo: 3316708413" name="telefono" required readonly value="{{$empleado->telefono}}">
                    <div class="valid-feedback">
                        Teléfono Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Teléfono.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer133">Imagen</label>
                    <img src="/storage/{{$empleado->imagen}}" alt="{{$empleado->imagen}}" width="100px">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
        {{-- <a class="btn btn-primary" href="tablaempleados" role="button">Ver tabla</a> --}}

    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'
    
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')
    
      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
    
            form.classList.add('was-validated')
          }, false)
        })
    })()
    </script>


@endsection
