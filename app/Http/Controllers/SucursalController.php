<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    public function listado()
    {
        $sucursales = DB::table('sucursal')->get();
        return view('/admin/heredar_admin/sucursal/sucursal_tabla', ['sucursales' => $sucursales]);
    }
    public function form()
    {
        return view('/admin/heredar_admin/sucursal/sucursal');
    }
    public function editar($id)
    {
        $sucursal = DB::table('sucursal')->where('id', $id)->first();
        return view('/admin/heredar_admin/sucursal/editar', ['sucursal' => $sucursal]);
    }

    public function guardar(Request $request)
    {
        $id = DB::table('sucursal')->insertGetId([
            'sucursal' => $request->sucursal,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'horario' => $request->horario,
            'servicios' => $request->servicios,
            'imagen' => 'imagen/sucursales/sucursales_default.jpg'
        ]);
        if ($request->hasfile('imagen')) {
            $extension = $request->imagen->extension();
            $nuevo = 'sucursal_' . $id . '.' . $extension;
            $ruta = $request->imagen->storeAs('imagenes/sucursales', $nuevo, 'public');
            $affected = DB::table('sucursal')
                ->where('id', $id)
                ->update([
                    'imagen' => $ruta,

                ]);
        }
        $sucursales = DB::table('sucursal')->get();
        return view('/admin/heredar_admin/sucursal/sucursal_tabla',['sucursales'=>$sucursales]);
    }

    public function act(Request $request, $id)
    {
        
    }
}
