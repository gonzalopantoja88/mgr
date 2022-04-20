<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);
        //parametro opcional para habilitar recordar contraseña
        $remember = $request->filled('remember');
    
        if(Auth::attempt($credentials, $remember)){
            //linea de abajo evita ataques de seguridad
            $request->session()->regenerate();
            return redirect()->route('index');
        };  
        return redirect('/login');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        //linea abajo sirve para invalidar la sesion y generar un nuevo token csrf despues de cerrado sesion 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
