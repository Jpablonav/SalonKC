@extends('/cliente.carrito.layout')
   
@section('content')
    
<div class="row">
    @foreach($productos as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->imagen }}" alt="">
                <div class="caption">
                    <h4>{{ $product->nombre_producto }}</h4>
                    <p>{{ $product->descripcion }}</p>
                    <p><strong>Price: </strong> {{ $product->precio }}$</p>
                    <p class="btn-holder"><a href="{{ route('carrito.agregar', $product->producto_id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection