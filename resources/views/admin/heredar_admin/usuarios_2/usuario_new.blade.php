@extends('/admin/plantilla/appadmin')

@section('titulo', 'Usuarios Nuevos')

@section('contenido')
<div class="container">
    <form class="needs-validation" novalidate method="POST" action="/usuariosnew" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer353">Nombre Completo</label>
                <input type="text" class="form-control" id="validationServer353"
                    placeholder="Ejemplo: Juan" name="nombre" required>
                <div class="valid-feedback">
                    Usuario Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir a intentarlo.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer373">Email</label>
                <input type="email" class="form-control" id="validationServer373"
                    placeholder="Ejemplo: usuario@example.com" name="email" required>
                <div class="valid-feedback">
                    Email Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Email.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer393">Contraseña</label>
                <input type="password" class="form-control" id="validationServer393" placeholder="********"
                    name="contraseña" required>
                <div class="valid-feedback">
                    Contraseña Válida!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir la Contraseña.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer403">Tipo de Status</label>
                <input type="text" class="form-control" id="validationServer403"
                    placeholder="Ejemplo: active o inactive" name="status" required>
                <div class="valid-feedback">
                    Tipo de Status!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Tipo de Status.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer133">Imagen</label>
                <input type="file" class="form-control" id="validationServer133"
                     name="imagen" accept="imagen/*" required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
    <a class="btn btn-primary" href="tablausuarios" role="button">Ver tabla</a>

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