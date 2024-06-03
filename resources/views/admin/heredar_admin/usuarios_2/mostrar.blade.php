@extends('/admin/plantilla/appadmin')

@section('titulo', 'Usuario')

@section('contenido')
<div class="container">
    <h1>Borrar</h1>
    <form class="needs-validation" novalidate method="POST" action="/usuariosnew/{{ $usuario->Id }}">
        @csrf
        @method('DELETE')
        <div class="form-row">
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer093">Usuario ID</label>
                <input type="number" class="form-control" id="validationServer093" placeholder="Ejemplo: 1"
                    name="id" readonly value="{{ $usuario->Id }}">
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer353">Nombre</label>
                <input type="text" class="form-control" id="validationServer353"
                    placeholder="Ejemplo: Juan" name="nombre" readonly required value="{{ $usuario->nombre}}">
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer373">Email</label>
                <input type="email" class="form-control" id="validationServer373"
                    placeholder="Ejemplo: usuario@example.com" name="email" readonly required value="{{ $usuario->email}}">
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer393">Contraseña</label>
                <input type="password" class="form-control" id="validationServer393" placeholder="********"
                    name="contraseña" readonly required value="{{ $usuario->contraseña}}">
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer403">Tipo de Status</label>
                <input type="text" class="form-control" id="validationServer403"
                    placeholder="Ejemplo: Active o Inactive" name="status" required readonly value="{{ $usuario->status}}">
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
