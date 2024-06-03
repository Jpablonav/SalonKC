<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function guardar(Request $request)
    {
        $id = DB::table("cita")->insertgetId([
            'empleado_id' => $request->empleado_id,
            'fecha' => $request->fecha,
            'hora'=> $request->hora
            ]);
            $citas = DB::table('cita')->get();
            return view('/admin/heredar_admin/cita/cita_tabla',['citas'=>$citas]);
    }
    public function actualizar(Request $request, $id)
    {
       $affected = DB::table('cita')
       ->where('cita_id', $id)
       ->update([
        'empleado_id' => $request->empleado_id,
       'fecha' => $request->fecha,
       'hora'=> $request->hora
       ]);
             $citas = DB::table('cita')->get();
        return view("/admin/heredar_admin/cita/cita_tabla", ["citas"=> $citas]);
    }
    public function eliminar($id)
    {
        $empleados =DB::table('empleado')->get();
        $deleted = DB::table('cita')->where('cita_id', $id)->delete();
        $citas = DB::table('cita')->get();
        return view("/admin/heredar_admin/cita/cita_tabla", ["citas"=> $citas]);


    }
    public function listado()
    {
        $citas = DB::table('cita')->get();
        return view("/admin/heredar_admin/cita/cita_tabla", ["citas"=> $citas]);
    }
    public function selectid($id)
    {
        $empleados =DB::table('empleado')->get();
        $cita = DB::table('cita')->where('cita_id', $id)->first();
        return view('/admin/heredar_admin/cita/mostrar', ['cita'=> $cita, 'empleados'=>$empleados]);
    }
    public function editar($id)
    {
        $empleados =DB::table('empleado')->get();
        $cita = DB::table("cita")->where('cita_id', $id)->first();
        return view('/admin/heredar_admin/cita/editar', ['cita'=> $cita, 'empleados'=>$empleados]);
    }
    public function formulario()
    {
        $empleados =DB::table('empleado')->get();
        return view("/admin/heredar_admin/cita/cita",['empleados'=>$empleados]);
    }
}
