<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function guardar(Request $req)
    {
        // dd($req->all());
        $id = DB::table('cliente')->insertgetId([
            'nombre' => $req->nombre,
            'telefono' => $req->telefono,
            'direccion' => $req->direccion,
            'email' => $req->email,
            'imagen'=> 'imagenes/clientes/cliente_default.jpg',
        ]);
        if($req->hasFile('imagen')){
            $extension=$req->imagen->extension();
            $nuevo='cliente_'.$id.'.'.$extension;
            $ruta=$req->imagen->storeAs('imagenes/clientes',$nuevo,'public');
            $affected = DB::table('cliente')
            ->where('clienteid', $id)
            ->update([
               'imagen'=> $ruta,
    
            ]);
        }
        
        // dd($res);
        $clientes = DB::table('cliente')->get();
        return view('/admin/heredar_admin/cliente/cliente_tabla', ['clientes' => $clientes]);
    }
    public function actualizar(Request $req, $id)
    {
        $affected = DB::table('cliente')
            ->where('clienteid', $id)
            ->update([
                'nombre' => $req->nombre,
                'telefono' => $req->telefono,
                'direccion' => $req->direccion,
                'email' => $req->email,
    
            ]);
            if($req->hasFile('imagen')){
                $extension=$req->imagen->extension();
                $nuevo='cliente_'.$id.'.'.$extension;
                $ruta=$req->imagen->storeAs('imagenes/clientes',$nuevo,'public');
                $affected = DB::table('cliente')
                ->where('clienteid', $id)
                ->update([
                   'imagen'=> $ruta,
        
                ]);
            }
            // dd($affected); //devuelve mayor a 0 si pudo o 0 si no pudo actualizar
            $clientes = DB::table('cliente')->get();
            return view('/admin/heredar_admin/cliente/cliente_tabla', ['clientes' => $clientes]);
    }
    public function borrar($id)
    {
        $deleted = DB::table('cliente')->where('clienteid', $id)->delete();
        $clientes = DB::table('cliente')->get();
        return view('/admin/heredar_admin/cliente/cliente_tabla', ['clientes' => $clientes]);
    
    }
    public function listado()
    {
        $clientes = DB::table('cliente')->get();
        return view('/admin/heredar_admin/cliente/cliente_tabla', ['clientes' => $clientes]);
    }
    public function show($id)
    {
        $cliente = DB::table('cliente')->where('clienteid', $id)->first();
        return view('/admin/heredar_admin/cliente/mostrar',['cliente' => $cliente]);
    }
    public function editar($id)
    {
        $cliente = DB::table('cliente')->where('clienteid', $id)->first();
        return view('/admin/heredar_admin/cliente/editar', ['cliente' => $cliente]);

    }
    public function create()
    {
        return view('/admin/heredar_admin/cliente/cliente');

    }


}
