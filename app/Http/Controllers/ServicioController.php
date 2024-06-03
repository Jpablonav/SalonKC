<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServicioController extends Controller
{
    public function save(Request $req)
    {
        // dd($request->all());
        $id = DB::table('servicio')->insertGetId([
            'nombre_servicio' => $req->nombre_servicio,
            'descripcion' => $req->descripcion,
            'duracion' => $req->duracion,
            'precio' => $req->precio,
            'producto_id' => $req->producto_id,
            // 'imagen'=> 'imagenes/servicios/imagen.jpg'
        ]);
        // if($req->hasFile('imagen')){
        //     $extension=$req->imagen->extension();
        //     $nuevo='servicio_'.$id.'.'.$extension;
        //     $ruta=$req->imagen->storeAs('imagenes/servicios',$nuevo,'public');
        //     $affected = DB::table('servicio')
        //     ->where('servicio_id', $id)
        //     ->update([
        //         'imagen'=> $ruta,
        //     ]);
        // }    
        $servicios = DB::table('servicio')->get();
        return view('/admin/heredar_admin/servicios/servicios_tabla',['servicios'=> $servicios]);
    }
    public function act(Request $req, $id)
    {
        $affected = DB::table('servicio')
        ->where('servicio_id', $id)
        ->update([
            'nombre_servicio' => $req->nombre_servicio,
            'descripcion' => $req->descripcion,
            'duracion' => $req->duracion,
            'precio' => $req->precio,
            'producto_id' => $req->producto_id,
        ]);
        // if($req->hasFile('imagen')){
        //     $extension=$req->imagen->extension();
        //     $nuevo='servicio_'.$id.'.'.$extension;
        //     $ruta=$req->imagen->storeAs('imagenes/servicios',$nuevo,'public');
        //     $affected = DB::table('servicio')
        //     ->where('servicio_id', $id)
        //     ->update([
        //         'imagen'=> $ruta,
        //     ]);
        // }
        $servicios = DB::table('servicio')->get();
        return view('/admin/heredar_admin/servicios/servicios_tabla',['servicios'=> $servicios]);
        
    }
    public function delete($id)
    {
        $deleted = DB::table('servicio')->where('servicio_id', $id)->delete();
        $servicios = DB::table('servicio')->get();
        return view('/admin/heredar_admin/servicios/servicios_tabla',['servicios'=> $servicios]);
    }
    public function list()
    {
        $servicios = DB::table('servicio')->get();
        return view('/admin/heredar_admin/servicios/servicios_tabla',['servicios'=> $servicios]);   
     }
    public function seleccionar($id)
    {
        $productos = DB::table('producto')->get();
        $servicio = DB::table('servicio')->where('servicio_id', $id)->first();
        return view('/admin/heredar_admin/servicios/mostrar',['servicio'=> $servicio, 'productos'=>$productos]);    
    }
    public function editt($id)
    {
        $productos = DB::table('producto')->get();
        $servicio = DB::table('servicio')->where('servicio_id', $id)->first();
        return view('/admin/heredar_admin/servicios/editar',['servicio'=> $servicio,'productos'=>$productos]);
    }
    public function form()
    {
        $productos = DB::table('producto')->get();
        return view('/admin/heredar_admin/servicios/servicios',['productos'=>$productos]);
    }

}


