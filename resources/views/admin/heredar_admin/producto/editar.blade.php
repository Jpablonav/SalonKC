@extends('/admin/plantilla/appadmin')

@section('titulo', 'Producto')

@section('contenido')
    <div class="container">
        <h1>Editar</h1>
        <form class="needs-validation" novalidate method="POST" action="/productos/{{ $producto->producto_id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                        name="nombre_producto" required value="{{ $producto->nombre_producto }}">
                    <div class="valid-feedback">
                        Nombre del Producto Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Nombre del Producto.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer203">Marca</label>
                    <select class="form-select" aria-label="Marcas" name="marcaid" required>
                        <option>Selecciona una marca</option>
                        @foreach ($marcas as $marca)
                            <option {{$marca->marcaid==$producto->marcaid?'selected':''}} value="{{ $marca->marcaid }}">{{ $marca->nombre_marca }}</option>
                        @endforeach

                    </select>
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
                        name="descripcion" required value="{{ $producto->descripcion }}"></input>
                    <div class="valid-feedback">
                        Descripción Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Descripción.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer223">Categoría</label>
                    <select class="form-select" aria-label="Categorias" name="categoriasid" required>
                        <option >Selecciona la categoria</option>
                        @foreach ($categorias as $categoria)
                            <option {{$categoria->categoriasid==$producto->categoriasid?'selected':''}} value="{{ $categoria->categoriasid }}">{{ $categoria->nombre_categoria }}</option>
                        @endforeach
                    </select>
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
                        name="precio" required value="{{ $producto->precio }}">
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
                        name="cantidad" required value="{{ $producto->cantidad }}">
                    <div class="valid-feedback">
                        Cantidad Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la cantidad.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer133">Imagen</label>
                    <img src="/storage/{{$producto->imagen}}" alt="{{$producto->imagen}}" width="100px">
                    <input type="file" class="form-control" id="validationServer133"
                         name="imagen" accept="imagen/*" >
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
