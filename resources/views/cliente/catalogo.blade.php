@extends('plantilla/app')
@section('titulo', 'Productos')

@section('contenido')

    <style>
        .row-cols-1 img,
        .row-cols-md-3 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            vertical-align: middle;
        }

        .col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
        }

        .col img {
            width: 100%;
            /* Ajusta el ancho de la imagen al 100% del contenedor */
            height: 700px;
            /* Establece una altura fija para todas las imágenes */
            object-fit: scale-down;
            /* Puedes ajustar esto según tus necesidades */

        }

        .col p {
            margin-top: auto;
        }

        h6.disponible {
            color: green;
            font-size: 150%;
        }
    </style>
    <div class="col-md-6" id="botones">
        <div class="mb-3">
            <form action="/catalogo/categoria" method="POST">
                @csrf
                <select class="form-select" id="filtroProductos" name="categorias">
                    {{-- <option selected>Ver productos</option> --}}
                    @foreach ($categorias as $categoria)
                        <option id="{{$categoria->nombre_categoria}}" value="{{$categoria->nombre_categoria}}">{{$categoria->nombre_categoria}}</option>
                    @endforeach

                    {{-- <option id="ialuronico" value="ialuronico">Ver ialuronicos</option>
                    <option id="massimo" value="massimo">Ver massimo</option>
                    <option id="amino" value="amino">Ver amino</option>
                    <option id="crema" value="crema">Ver crema</option>
                    <option id="moistur" value="moistur">Ver moistur</option>
                    <option id="pozione" value="pozione">Ver pozione</option>
                    <option id="maschera" value="maschera">Ver maschera</option>
                    <option id="todos" value="todos">Ver todos</option> --}}
                </select>
                <input type="submit" value="Buscar Producto" name="enviar">
            </form>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-5">
        @foreach ($productos as $producto)
            <div class="col" id="shampoo1">
                <div class="card h-100">
                    <img src="/storage/{{ $producto->imagen }}" alt="{{ $producto->imagen }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h2 class="card-title">{{ $producto->nombre_producto }}</h2>
                    </div>
                    <h6 class="disponible">Disponible</h6>
                    <div class="card-footer text-center">
                        <a href="/detalle/{{ $producto->producto_id }}" class="btn btn-primary">Ver detalles del
                            producto</a>
                    </div>
                </div>
            </div>
        @endforeach
       

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    </body>
    

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/filtro_js/filtro.js"></script>
@endsection
