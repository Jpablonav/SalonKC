@extends('/admin/plantilla/appadmin')

@section('titulo', 'Sucursal')

@section('contenido')
    <div class="container">
        <form class="needs-validation" novalidate method="POST" action="/sucursal" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-3 mt-3">
                    <label for="validationServer203">Sucursal</label>
                    <input type="text" class="form-control" id="validationServer203"
                        placeholder="Ejemplo: Sucursal Central" name="sucursal" required>
                    <div class="valid-feedback">
                        Sucursal Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Sucursal.
                    </div>
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <label for="validationServer213">Dirección</label>
                    <input type="text" class="form-control" id="validationServer213" placeholder="Ejemplo: Calle 123"
                        name="direccion" required>
                    <div class="valid-feedback">
                        Dirección Válida!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir la Dirección.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer223">Teléfono</label>
                    <input type="tel" class="form-control" id="validationServer223" placeholder="Ejemplo: 3316708413"
                        name="telefono" required>
                    <div class="valid-feedback">
                        Teléfono Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Teléfono.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer233">Horario</label>
                    <input type="text" class="form-control" id="validationServer233"
                        placeholder="Ejemplo: 9:00 AM - 6:00 PM" name="horario" required>
                    <div class="valid-feedback">
                        Horario Válido!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir el Horario.
                    </div>
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <label for="validationServer243">Servicios</label>
                    <textarea class="form-control" id="validationServer243" placeholder="Ejemplo: Atención al cliente, Soporte técnico"
                        name="servicios" required></textarea>
                    <div class="valid-feedback">
                        Servicios Válidos!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, vuelva a escribir los Servicios.
                    </div>
                </div>
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServer253">Imagen</label>
                    <input type="file" class="form-control" id="validationServer253" name="imagen" accept="image/*"
                        required>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>

    </div>









@endsection
