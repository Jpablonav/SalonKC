@extends('/admin/plantilla/appadmin')

@section('titulo', 'Cita')

@section('contenido')
<div class="container">
    <h1>Editar</h1>
    <form class="needs-validation" novalidate method="POST" action="/citas/{{ $cita->cita_id}}"> 
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer053" >Cita ID</label>
                <input type="number" class="form-control" id="validationServer053"
                    placeholder="Ejemplo: 1" name="cita_id" readonly value="{{ $cita->cita_id}}" required>
                <div class="valid-feedback">
                    Cita ID Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor vuelva a escribir la Cita ID.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer063">Empleado ID</label>
                <select class="form-select" aria-label="Empleados" name="empleado_id" required>
                    <option >Selecciona un empleado</option>
                    @foreach ($empleados as $empleado)
                        <option {{$empleado->empleadoid==$cita->empleado_id?'selected':''}} value="{{ $empleado->empleadoid }}">{{ $empleado->empleadoid }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer073">Fecha</label>
                <input type="date" class="form-control" id="validationServer073"
                    placeholder="Seleccione una fecha" name="fecha" required value="{{ $cita->fecha}}">
                <div class="valid-feedback">
                    Fecha Válida!
                </div>
                <div class="invalid-feedback">
                    Por favor seleccione una fecha válida.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer083">Hora</label>
                <input type="time" class="form-control " id="validationServer083"
                    placeholder="Seleccione una hora" name="hora" required value="{{ $cita->hora}}">
                <div class="valid-feedback">
                    Hora Válida!
                </div>
                <div class="invalid-feedback">
                    Por favor seleccione una hora válida.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
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
