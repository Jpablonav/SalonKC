<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function guardar(Request $request)
    {
        //  dd($request->all());
        $id = DB::table('empleado')->insertGetId([
            'nombre' => $request->nombre,
            'especialidad' => $request->especialidad,
            'telefono' => $request->telefono,
            'imagen' => 'imagenes/clientes/cliente_default.jpg'
        ]);
        if ($request->hasFile('imagen')) {
            $extension = $request->imagen->extension();
            $nuevo = 'empleado_' . $id . '.' . $extension;
            $ruta = $request->imagen->storeAs('imagenes/productos', $nuevo, 'public');
            $affected = DB::table('empleado')
                ->where('empleadoid', $id)
                ->update([
                    'imagen' => $ruta,
                ]);
        }


        $empleados = DB::table("empleado")->get();
        return view("/admin/heredar_admin/empleado/empleados_tabla", ["empleados" => $empleados]);
    }
    public function actualizar(Request $request, $id)
    {
        $affected = DB::table('empleado')
        ->where("empleadoid", $id)
        ->update([
            "nombre"=> $request->nombre,
            "especialidad"=> $request->especialidad,
            "telefono"=> $request->telefono,
            ]);
            if ($request->hasFile('imagen')) {
                $extension = $request->imagen->extension();
                $nuevo = 'empleado_' . $id . '.' . $extension;
                $ruta = $request->imagen->storeAs('imagenes/empleados', $nuevo, 'public');
                $affected = DB::table('empleado')
                    ->where('empleadoid', $id)
                    ->update([
                        'imagen' => $ruta,
                    ]);
            }
         $empleados = DB::table('empleado')->get();
         return view('/admin/heredar_admin/empleado/empleados_tabla', ['empleados' => $empleados]);
    }
    public function eliminar($id)
    {
        $delete = DB::table('empleado')->where('empleadoid', $id)->delete();
        $empleados = DB::table("empleado")->get();
        return view("/admin/heredar_admin/empleado/empleados_tabla", ["empleados" => $empleados]);
    }
    public function listado()
    {
        $empleados = DB::table("empleado")->get();
        return view("/admin/heredar_admin/empleado/empleados_tabla", ["empleados" => $empleados]);
    }
    public function selectid($id)
    {
    $empleado = DB::table('empleado')->where('empleadoid', $id)->first();
    return view('/admin/heredar_admin/empleado/mostrar', ['empleado'=> $empleado]);
    }
    public function editar($id)
    {
        $empleado = DB::table('empleado')->where('empleadoid', $id)->first();
        return view('/admin/heredar_admin/empleado/editar', ['empleado'=> $empleado]);
    }
    public function formulario()
    {
        return view("/admin/heredar_admin/empleado/empleados");
    }

}
