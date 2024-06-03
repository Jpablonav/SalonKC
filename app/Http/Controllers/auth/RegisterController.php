<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User

class RegisterController extends Controller
{
    // public function showRegistrationForm()
    // {
    //     return view('/admin/heredar_admin/usuario/usuarios_tabla',);
    // }

    // public function register(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8',
    //     ]);

    //     // Crear el nuevo usuario
    //     $user = User::create([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'password' => bcrypt($validatedData['password']),
    //     ]);

    //     // Autenticar al nuevo usuario después de registrar
    //     auth()->login($user);

    //     return redirect('/dashboard'); // Redirigir a la página de inicio después del registro
    // }
}