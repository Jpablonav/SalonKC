<?php
 
namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;

 
class LoginController extends Controller
{
    public function show(){
        return view("/admin/heredar_admin/auth.sign-in.login");
    }
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email','max:255', 'unique:users'],
        //     'password' => ['required','max:1024'],
        // ]);
                          //$credentials
        if (Auth::attempt(["email"=> $request->email,'password'=>$request->password, 'status'=> 'active'])) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
}
// public function guardar(Request $request)
//     {
        
//         $id = DB::table("users")->insertgetId([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password'=> $request->password,
//             'rol'=> $request->rol,
//             'status'=> $request->status,
//             'telefono'=> $request->Telefono,
//             'image'=> 'imagenes/usuario/default.jpg',
//             ]);
//             if($request->hasFile('image')){
//                 $extension=$request->image->extension();
//                 $nuevo='usuario_'.$id.'.'.$extension;
//                 $ruta=$request->image->storeAs('/storage/imagenes/usuarios',$nuevo,'public');
//                 $affected = DB::table('users')
//                 ->where('id', $id)
//                 ->update([
//                    'imagen'=> $ruta,
        
//                 ]);
//             }
//             $usuarios = DB::table('users')->get();
//             return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);
            
//     }
//     public function actualizar(Request $request, $id)
//     {
//        $affected = DB::table('users')
//        ->where('id', $id)
//        ->update([
//         'name' => $request->name,
//             'email' => $request->email,
//             'password'=> $request->password,
//             'rol'=> $request->rol,
//             'status'=> $request->status,
//              'telefono'=> $request->Telefono,
//             'image'=> 'imagenes/usuario/default.jpg',
//             ]);
//             if($request->hasFile('image')){
//                 $extension=$request->image->extension();
//                 $nuevo='usuario_'.$id.'.'.$extension;
//                 $ruta=$request->image->storeAs('imagenes/usuarios',$nuevo,'public');
//                 $affected = DB::table('users')
//                 ->where('id', $id)
//                 ->update([
//                    'image'=> $ruta,
        
//                 ]);
//             }
//             $usuarios = DB::table('users')->get();
//             return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);
//     }
//     public function eliminar($id)
//     {
//         $deleted = DB::table('users')->where('id', $id)->delete();
//         $usuarios = DB::table('users')->get();
//         return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);


//     }
//     public function listado()
//     {
//         $usuarios = DB::table('users')->get();
//         return view('/admin/heredar_admin/usuario/usuarios_tabla',['usuarios'=>$usuarios]);
//     }
//     public function selectid($id)
//     {
//         $usuario = DB::table('users')->where('id', $id)->first();
//         return view('/admin/heredar_admin/usuario/mostrar', ['usuario'=> $usuario]);
//     }
//     public function editar($id)
//     {
//         $usuario = DB::table('users')->where('id', $id)->first();
//         return view('/admin/heredar_admin/usuario/mostrar', ['usuario'=> $usuario]);
//     }
//     public function formulario()
//     {
//         return view("/admin/heredar_admin/usuario/usuario");
//     }
}
