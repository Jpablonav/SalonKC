@extends('plantilla/app')
@section('titulo')

@section('contenido')
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .product-container {
            margin-top: 20px;
            text-align: justify;
        }

        .product-image-container {
            position: relative;
            z-index: 1;
            /* Asegúrate de que la imagen tenga un índice menor que la barra de navegación */
        }

        .product-image {
            width: 100%;
            max-width: 500px;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .product-image:hover {
            transform: scale(1.2);
        }

        .product-details {
            margin-top: 20px;
            font-size: 1.5em;
        }

        .availability {
            color: green;
        }

        /* Estilo para la lupa */
        .zoom-lens {
            width: 100px;
            height: 100px;
            border: 1px solid #d4d4d4;
            position: absolute;
            display: none;
        }

        /* Resultado del zoom */
        .zoom-result {
            border: 1px solid #d4d4d4;
            width: 300px;
            height: 300px;
            position: absolute;
            display: none;
            background-image: url('platino.jpg');
            /* Cambia 'platino.jpg' con la ruta correcta de tu imagen */
            background-size: 300% 300%;
        }

        /* Cambia el cursor al pasar sobre la imagen */
        .product-image:hover .zoom-lens {
            display: block;
        }

        /* Cambia la visibilidad del resultado del zoom */
        .product-image:hover .zoom-result {
            display: block;
        }

        /* Estilo de la barra de navegación */
        nav {
            z-index: 2;
            /* Asegúrate de que la barra de navegación tenga un índice mayor que la imagen */
        }
    </style>
    <div class="container product-container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-image-container">
                    <img src="/storage/{{$producto->imagen}}" alt="{{$producto->imagen}}" class="product-image">
                    <div class="zoom-lens"></div>
                    <div class="zoom-result"></div>
                </div>
            </div>
            <div class="col-md-6 product-details">
                <h2>{{ $producto->nombre_producto}}</h2>
                <p>{{ $producto->descripcion}}</p>
                <p>Precio: ${{ $producto->precio}} MXN</p>
                <p class="availability">{{ $producto->nombre_marca}}</p>
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="100" value="1">
                <button type="button" class="btn btn-primary">Añadir al carrito</button>
            </div>
        </div>
    </div>

    <div class="card-footer text-center">
        <a href="/catalogo" class="btn btn-primary">regresar</a>
    </div>
    <script>
        // Función para activar el zoom de la imagen
        function zoomImage(e) {
            var lens = document.querySelector('.zoom-lens');
            var result = document.querySelector('.zoom-result');
            var img = document.querySelector('.product-image');

            // Tamaño del área de zoom
            var zoomRatio = 3;

            // Calcula las dimensiones de la lupa
            lens.style.backgroundSize = (img.width * zoomRatio) + 'px ' + (img.height * zoomRatio) + 'px';

            // Calcula la relación entre el tamaño de la lupa y el tamaño del resultado del zoom
            var ratio = result.width / lens.width;

            // Obtiene las coordenadas del cursor dentro de la imagen
            var x = e.offsetX - lens.offsetWidth / 2;
            var y = e.offsetY - lens.offsetHeight / 2;

            // Evita que la lupa se salga de los límites de la imagen
            x = Math.min(Math.max(x, 0), img.width - lens.offsetWidth);
            y = Math.min(Math.max(y, 0), img.height - lens.offsetHeight);

            // Establece la posición de la lupa
            lens.style.left = x + 'px';
            lens.style.top = y + 'px';

            // Establece la posición del resultado del zoom
            result.style.backgroundPosition = '-' + (x * ratio) + 'px -' + (y * ratio) + 'px';
        }

        // Asigna la función al evento mousemove
        document.querySelector('.product-image').addEventListener('mousemove', zoomImage);
    </script>

@endsection
