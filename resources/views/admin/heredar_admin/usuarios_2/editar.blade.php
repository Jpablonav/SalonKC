@extends('/admin/plantilla/appadmin')

@section('titulo', 'Usuario')

@section('contenido')
<div class="container">
    <h1>Editar</h1>
    <form class="needs-validation" novalidate method="POST" action="/usuariosnew/{{ $usuario->Id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer093">Usuario ID</label>
                <input type="number" class="form-control" id="validationServer093" placeholder="Ejemplo: 1"
                    name="id" readonly value="{{ $usuario->Id }}">
                <div class="valid-feedback">
                    ID Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el ID.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer353">Nombre</label>
                <input type="text" class="form-control" id="validationServer353"
                    placeholder="Ejemplo: Juan" name="nombre" required value="{{ $usuario->nombre}}">
                <div class="valid-feedback">
                    Nombre Válido!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Nombre.
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer373">Email</label>
                <input type="email" class="form-control" id="validationServer373"
                    placeholder="Ejemplo: usuario@example.com" name="email" required value="{{ $usuario->email}}">
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
                    name="contraseña" required value="{{ $usuario->contraseña}}">
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
                    placeholder="Ejemplo: Active o Inactive" name="status" required value="{{ $usuario->status}}">
                <div class="valid-feedback">
                    Tipo de Status!
                </div>
                <div class="invalid-feedback">
                    Por favor, vuelva a escribir el Tipo de Status.
                </div>
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
