<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class UsuariosNewController extends Controller
{
    public function guardar(Request $request)
    {
        $id = DB::table("usuarios_new")->insertGetId([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contraseña' => $request->contraseña,
            'status' => $request->status,
            'imagen' => 'imagenes/usuario/default.jpg',
        ]);
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $nuevo = 'usuario_new_' . $id . '.' . $extension;
            $ruta = $request->image->storeAs('imagenes/usuarios', $nuevo, 'public');
            $affected = DB::table('usuarios_new')
                ->where('id', $id)
                ->update([
                    'imagen' => $ruta,

                ]);
        }
        $usuarios = DB::table('usuarios_new')->get();
        return view('/admin/heredar_admin/usuarios_2/usuarios_new_tabla', ['usuarios' => $usuarios]);

    }
    public function actualizar(Request $request, $id)
    {
        $affected = DB::table('usuarios_new')
            ->where('id', $id)
            ->update([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'contraseña' => $request->contraseña,
                'status' => $request->status,
                'imagen' => 'imagenes/usuario/default.jpg',
            ]);
        if ($request->hasFile('imagen')) {
            $extension = $request->image->extension();
            $nuevo = 'usuario_new_' . $id . '.' . $extension;
            $ruta = $request->image->storeAs('imagenes/usuarios', $nuevo, 'public');
            $affected = DB::table('usuarios_new')
                ->where('id', $id)
                ->update([
                    'imagen' => $ruta,

                ]);
        }
        $usuarios = DB::table('usuarios_new')->get();
        return view('/admin/heredar_admin/usuarios_2/usuarios_new_tabla', ['usuarios' => $usuarios]);
    }
    public function borrar($id)
    {
        $deleted = DB::table('usuarios_new')->where('id', $id)->delete();
        $usuarios = DB::table('usuarios_new')->get();
        return view('/admin/heredar_admin/usuarios_2/usuarios_new_tabla', ['usuarios' => $usuarios]);


    }
    public function listado()
    {
        $usuarios = DB::table('usuarios_new')->get();
        return view('/admin/heredar_admin/usuarios_2/usuarios_new_tabla', ['usuarios' => $usuarios]);
    }
    public function selectid($id)
    {
        $usuario = DB::table('usuarios_new')->where('id', $id)->first();
        return view('/admin/heredar_admin/usuarios_2/mostrar', ['usuario' => $usuario]);
    }
    public function editar($id)
    {
        $usuario = DB::table('usuarios_new')->where('id', $id)->first();
        return view('/admin/heredar_admin/usuarios_2/editar', ['usuario' => $usuario]);
    }
    public function formulario()
    {
        return view("/admin/heredar_admin/usuarios_2/usuario_new");
    }
}

