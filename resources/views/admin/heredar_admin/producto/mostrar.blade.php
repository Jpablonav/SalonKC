@extends('/admin/plantilla/appadmin')

@section('titulo', 'Producto')

@section('contenido')
    <div class="container">
        <h1>Mostrar</h1>
        <form class="needs-validation" novalidate method="POST" action="/productos/{{ $producto->producto_id }}">
            @csrf
            @method('DELETE')
            <div class="form-row">
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer183">Producto ID</label>
                    <input type="number" class="form-control" id="validationServer183" placeholder="Ejemplo: 1"
                        name="producto_id" readonly value="{{ $producto->producto_id }}">
                    <div class="valid-feedback">
                        Producto ID Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Producto ID.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer193">Nombre del Producto</label>
                    <input type="text" class="form-control" id="validationServer193" placeholder="Ejemplo: Champú"
                        name="nombre_producto" required readonly value="{{ $producto->nombre_producto }}">
                    <div class="valid-feedback">
                        Nombre del Producto Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Nombre del Producto.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer203">Marca</label>
                    <input type="text" class="form-control" id="validationServer203" placeholder="Ejemplo: Pantene"
                        name="marca" required readonly value="{{ $producto->nombre_marca }}">
                    <div class="valid-feedback">
                        Marca Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Marca.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer213">Descripción</label>
                    <input class="form-control" id="validationServer213" placeholder="Ejemplo: Tratamiento que..."
                        name="descripcion" required readonly value="{{ $producto->descripcion }}"></input>
                    <div class="valid-feedback">
                        Descripción Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Descripción.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer223">Categoría</label>
                    <input type="text" class="form-control" id="validationServer223"
                        placeholder="Ejemplo: Cuidado Capilar" name="categoria" required readonly value="{{ $producto->nombre_categoria }}">
                    <div class="valid-feedback">
                        Categoría Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Categoría.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer233">Precio</label>
                    <input type="number" class="form-control" id="validationServer233" placeholder="Ejemplo: 20.50"
                        name="precio" required readonly value="{{ $producto->precio }}">
                    <div class="valid-feedback">
                        Precio Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Precio.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer233">Cantidad</label>
                    <input type="number" class="form-control" id="validationServer233" placeholder="Ejemplo: 20.50"
                        name="cantidad" required readonly value="{{ $producto->cantidad }}">
                    <div class="valid-feedback">
                        Cantidad Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la cantidad.
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3 mt-3">
                <label for="validationServer133">Imagen</label>
                <img src="/storage/{{$producto->imagen}}" alt="{{$producto->imagen}}" width="100px">
            </div>
        </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
        {{-- <a class="btn btn-primary" href="tablaproducto" role="button">Ver tabla</a> --}}

    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
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
