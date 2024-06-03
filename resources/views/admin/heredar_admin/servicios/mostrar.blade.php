@extends('/admin/plantilla/appadmin')

@section('titulo', 'Servicios')

@section('contenido')
    <div class="container">
        <h1>Mostrar</h1>
        <form class="needs-validation" novalidate method="POST" action="/servicios/{{ $servicio->servicio_id}}">
            @csrf
            @method('DELETE')
            <div class="form-row">
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer283">Servicio ID</label>
                    <input type="number" class="form-control" id="validationServer283" placeholder="Ejemplo: 1"
                        name="servicio_id" readonly value="{{ $servicio->servicio_id}}">
                    <div class="valid-feedback">
                        Servicio ID Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Servicio ID.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer293">Nombre del Servicio</label>
                    <input type="text" class="form-control" id="validationServer293"
                        placeholder="Ejemplo: Corte de Cabello" name="nombre_servicio" required readonly value="{{$servicio->nombre_servicio}}">
                    <div class="valid-feedback">
                        Nombre del Servicio Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Nombre del Servicio.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer303">Descripción</label>
                    <textarea class="form-control" id="validationServer303" placeholder="Ejemplo: Servicio que..."
                        name="descripcion" readonly required>{{$servicio->descripcion}}</textarea>
                    <div class="valid-feedback">
                        Descripción Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Descripción.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer313">Duración</label>
                    <input type="text" class="form-control" id="validationServer313"
                        placeholder="Ejemplo: 1 hora" name="duracion" required readonly value="{{$servicio->duracion}}">
                    <div class="valid-feedback">
                        Duración Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Duración.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer323">Precio</label>
                    <input type="number" class="form-control" id="validationServer323"
                        placeholder="Ejemplo: 30.00" name="precio" required readonly value="{{$servicio->precio}}">
                    <div class="valid-feedback">
                        Precio Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Precio.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer333">Nombre del Producto</label>
                    <select class="form-select" aria-label="Productos" name="producto_id" required disabled>
                        <option> Selecciona el ID del producto</option>
                        @foreach ($productos as $producto)
                            <option {{$producto->producto_id==$producto->producto_id?'selected':''}} value="{{ $producto->producto_id }}">{{ $producto->nombre_producto }}</option>
                        @endforeach

                    </select>
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
