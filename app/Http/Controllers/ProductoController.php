<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function guardar(Request $request)
    {
        //  dd($request->all());
        $id = DB::table('producto')->insertGetId([
            'nombre_producto' => $request->nombre_producto,
            'marcaid' => $request->marcaid,
            'descripcion' => $request->descripcion,
            'categoriasid' => $request->categoriasid,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'imagen' => 'imagenes/clientes/cliente_default.jpg'
        ]);
        if ($request->hasFile('imagen')) {
            $extension = $request->imagen->extension();
            $nuevo = 'producto_' . $id . '.' . $extension;
            $ruta = $request->imagen->storeAs('imagenes/productos', $nuevo, 'public');
            $affected = DB::table('producto')
                ->where('producto_id', $id)
                ->update([
                    'imagen' => $ruta,
                ]);
        }


        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->get();
        // $productos = DB::table('producto')->get();
        return view('/admin/heredar_admin/producto/producto_tabla', ['productos' => $productos]);
    }
    public function actualizar(Request $request, $id)
    {
        $affected = DB::table('producto')
            ->where('producto_id', $id)
            ->update([
                'nombre_producto' => $request->nombre_producto,
                'marcaid' => $request->marcaid,
                'descripcion' => $request->descripcion,
                'categoriasid' => $request->categoriasid,
                'precio' => $request->precio,
            ]);
        if ($request->hasFile('imagen')) {
            $extension = $request->imagen->extension();
            $nuevo = 'producto_' . $id . '.' . $extension;
            $ruta = $request->imagen->storeAs('imagenes/productos', $nuevo, 'public');
            $affected = DB::table('producto')
                ->where('producto_id', $id)
                ->update([
                    'imagen' => $ruta,
                ]);
        }



        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->get();
        // $productos = DB::table('producto')->get();
        return view('/admin/heredar_admin/producto/producto_tabla', ['productos' => $productos]);
    }
    public function eliminar($id)
    {
        $deleted = DB::table('producto')->where('producto_id', $id)->delete();
        // $productos = DB::table('producto')->get();
        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->get();
        return view('/admin/heredar_admin/producto/producto_tabla', ['productos' => $productos]);
    }
    public function listado()
    {
        $productos = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->get();
        // dd($productos);
        // $productos = DB::table('producto')->get();
        return view('/admin/heredar_admin/producto/producto_tabla', ['productos' => $productos]);
    }
    public function selectid($id)
    {

        $producto = DB::table('producto')
            ->join('categorias', 'producto.categoriasid', '=', 'categorias.categoriasid')
            ->join('marcas', 'producto.marcaid', '=', 'marcas.marcaid')
            ->select('producto.*', 'categorias.nombre_categoria', 'marcas.nombre_marca')
            ->where('producto_id', $id)->first();
        return view('/admin/heredar_admin/producto/mostrar', ['producto' => $producto]);
    }
    public function editar($id)
    {
        $marcas = DB::table('marcas')->get();
        $categorias = DB::table('categorias')->get();
        $producto = DB::table('producto')->where('producto_id', $id)->first();
        return view('/admin/heredar_admin/producto/editar', ['producto' => $producto, 'marcas' => $marcas, 'categorias' => $categorias]);
    }
    public function formulario()
    {
        $marcas = DB::table('marcas')->get();
        $categorias = DB::table('categorias')->get();
        return view('/admin/heredar_admin/producto/producto', ['marcas' => $marcas, 'categorias' => $categorias]);
    }
}
