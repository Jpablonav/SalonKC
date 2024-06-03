<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoCatalogoController extends Controller
{
    public function catalogo()
    {
        $categorias = DB::table('categorias')
        ->get();
        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->get();
        // dd($productos);
        // $productos = DB::table('producto')->get();
        return view('/cliente/catalogo', ['productos' => $productos,'categorias'=> $categorias]);
    }
    public function detalle($id)
    {

        $producto = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->where('producto_id', $id)->first();
        return view('/cliente/detalle', ['producto' => $producto]);
    }
    public function filtro_categoria(Request $request)
    { //dd ($request->all());
        $categorias = DB::table('categorias')
        ->get();
        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->where('categorias.nombre_categoria', $request->categorias)
            ->get();
         //dd($productos);
        // $productos = DB::table('producto')->get();
        return view('/cliente/catalogo', ['productos' => $productos,'categorias'=> $categorias]);
    }
    public function agregarCarrito($id){
        $product = DB::table('producto')
        ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
        ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
        ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
        ->where('producto_id', $id)->first();
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->nombre_producto,
                "quantity" => 1,
                "price" => $product->precio,
                "image" => $product->imagen
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }
    public function actualizarCarrito(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function quitarCarrito(Request $request){
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function mostrarCarrito(){
        return view('/cliente/carrito/cart');
    }
    public function vaciarCarrito(){
        
    }
    public function pagarCarrito(){
        
    }
    public function productos()
    {
        $categorias = DB::table('categorias')
        ->get();
        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->get();
        // dd($productos);
        // $productos = DB::table('producto')->get();
        return view('/cliente/carrito/products', ['productos' => $productos,'categorias'=> $categorias]);
    }

}
