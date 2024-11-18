<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //mostrar formulario
    public function showLoginForm()
    {
        return view('autenticacion.login');
    }
    //validar que los datos ingresador sean correctos 
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        //crear la autenticacion
        if(Auth::attempt($credentials))
        {
            return redirect()->route('cursosdisponibles.index');
        }        
        else{
            return back()->withErrors([
                'email'=>'las credenciales no coinciden con el registro '
            ])->onlyInput('email');        
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();//cuierra la session del usuario
        
        //revoca el token "remembe me" si existe
        $request->session()->invalidate();

        //regenera el token de la sessiom para evitar atakes csrf
        $request->session()->regenerateToken();

        //redirije al home
        return redirect()->route('home');
    }
}
