<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Support\Facades\Crypt;

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

        $user = User::where('email', $credentials['email'])->first();
        $decryptPassword = Crypt::decryptString($user->password);

        if($credentials['password'] === $decryptPassword)
        {
            Auth::login($user);
            //linea de abajo evita ataques de seguridad
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        return redirect('/login');
    
        // if(Auth::attempt($credentials, $remember)){
        //     //linea de abajo evita ataques de seguridad
        //     $request->session()->regenerate();

        //     return redirect()->route('index');
        // };  
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
