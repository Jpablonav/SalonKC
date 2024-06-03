<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProovedorController extends Controller
{
    public function listado()
    {
        $proovedores = DB::table('proovedores')->get();
        return view('/admin/heredar_admin/proovedor/proovedor_tabla',['proovedores' => $proovedores]);

    }
    public function form()
    {
        return view('/admin/heredar_admin/proovedor/proovedor');
    }
    public function editar($id)
    {
        $proovedor = DB::table('proovedores')->where('id', $id)->first();
        return view('/admin/heredar_admin/proovedor/editar',['proovedor' => $proovedor]);
    }   
    public function guardar(Request $request)
    {
        $id = DB::table('proovedores')->insertGetId([
            'marca' => $request->marca,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'imagen' => 'imagen/proovedores/proovedores_default.jpg'
        ]);
        if($request->hasfile('imagen')){
             $extension=$request->imagen->extension();
            $nuevo='proovedor_'.$id.'.'.$extension;
            $ruta=$request->imagen->storeAs('imagenes/proovedores',$nuevo,'public');
            $affected = DB::table('proovedores')
            ->where('id', $id)
            ->update([
               'imagen'=> $ruta,
    
            ]);
        }
        $proovedores = DB::table('proovedores')->get();
        return view('/admin/heredar_admin/proovedor/proovedor_tabla',['proovedores' => $proovedores]);
    }
    public function act(Request $request, $id)
    {
        $affected = DB::table('proovedores')
        ->where('id', $id)
        ->update([
            'marca' => $request->marca,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
        ]);
        if($request->hasfile('imagen')){
            $extension=$request->imagen->extension();
           $nuevo='proovedor_'.$id.'.'.$extension;
           $ruta=$request->imagen->storeAs('imagenes/proovedores',$nuevo,'public');
           $affected = DB::table('proovedores')
           ->where('id', $id)
           ->update([
              'imagen'=> $ruta,
   
           ]);
       }
       $proovedores = DB::table('proovedores')->get();
       return view('/admin/heredar_admin/proovedor/proovedor_tabla',['proovedores' => $proovedores]);
    }
    public function borrar($id)
    {
        $delete = DB::table('proovedores')->where('id',$id)->delete();
        $proovedores = DB::table('proovedores')->get();
        return view('/admin/heredar_admin/proovedor/proovedor_tabla',['proovedores' => $proovedores]);
    }
    public function selectid($id)
    {
        $proovedor = DB::table('proovedores')->where('id', $id)->first();
        return view('/admin/heredar_admin/proovedor/mostrar',['proovedor' => $proovedor ]);
    }
}
