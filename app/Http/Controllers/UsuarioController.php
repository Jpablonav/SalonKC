<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;


class UsuarioController extends Controller
{
    public function guardar(Request $request)
    {
        
        $id = DB::table("users")->insertgetId([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password,
            'rol'=> $request->rol,
            'status'=> $request->status,
            'telefono'=> $request->Telefono,
            'image'=> 'imagenes/usuario/default.jpg',
            ]);
            if($request->hasFile('image')){
                $extension=$request->image->extension();
                $nuevo='usuario_'.$id.'.'.$extension;
                $ruta=$request->image->storeAs('imagenes/usuarios',$nuevo,'public');
                $affected = DB::table('users')
                ->where('id', $id)
                ->update([
                   'imagen'=> $ruta,
        
                ]);
            }
            $usuarios = DB::table('users')->get();
            return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);
            
    }
    public function actualizar(Request $request, $id)
    {
       $affected = DB::table('users')
       ->where('id', $id)
       ->update([
        'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password,
            'rol'=> $request->rol,
            'status'=> $request->status,
             'telefono'=> $request->Telefono,
            'image'=> 'imagenes/usuario/default.jpg',
            ]);
            if($request->hasFile('image')){
                $extension=$request->image->extension();
                $nuevo='usuario_'.$id.'.'.$extension;
                $ruta=$request->image->storeAs('imagenes/usuarios',$nuevo,'public');
                $affected = DB::table('users')
                ->where('id', $id)
                ->update([
                   'image'=> $ruta,
        
                ]);
            }
            $usuarios = DB::table('users')->get();
            return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);
    }
    public function eliminar($id)
    {
        $deleted = DB::table('users')->where('id', $id)->delete();
        $usuarios = DB::table('users')->get();
        return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);


    }
    public function listado()
    {
        $usuarios = DB::table('users')->get();
        return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);
    }
    public function selectid($id)
    {
        $usuario = DB::table('users')->where('id', $id)->first();
        return view('/admin/heredar_admin/usuario/mostrar', ['usuario'=> $usuario]);
    }
    public function editar($id)
    {
        $usuario = DB::table('users')->where('id', $id)->first();
        return view('/admin/heredar_admin/usuario/mostrar', ['usuario'=> $usuario]);
    }
    public function formulario()
    {
        return view("/admin/heredar_admin/usuario/usuario");
    }
}