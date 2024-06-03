@extends('/admin/plantilla/appadmin')

@section('titulo', 'Cliente')

@section('contenido')
<div class="container">
    <form  class="needs-validation" novalidate method="POST" action="/clientes" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3 mt-3">
                <label for="validationServer103">Nombre</label>
                <input type="text" class="form-control" id="validationServer103"
                    placeholder="Ejemplo: Juan" name="nombre" required>
                <div class="valid-feedback">
                    Nombre Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Nombre.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer113">Teléfono</label>
                <input type="tel" class="form-control" id="validationServer113"
                    placeholder="Ejemplo: 3316708413" name="telefono" required>
                <div class="valid-feedback">
                    Teléfono Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Teléfono.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer123">Dirección</label>
                <input type="text" class="form-control" id="validationServer123"
                    placeholder="Ejemplo: Calle 123" name="direccion" required>
                <div class="valid-feedback">
                    Dirección Válida!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir la Dirección.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer133">Email</label>
                <div class="input-group">
                <input type="email" class="form-control" id="validationServer133"
                    placeholder="Ejemplo: correo@ejemplo.com" name="email" required>
                    <span class="input-group-text" id="inputGroupPrepend33">@</span>
                </div>
                <div class="valid-feedback">
                    Email Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Email.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer133">Imagen</label>
                <input type="file" class="form-control" id="validationServer133"
                     name="imagen" accept="imagen/*" >
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form> 
    {{-- <a class="btn btn-primary" href="tablacliente" role="button">Ver tabla</a> --}}


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
