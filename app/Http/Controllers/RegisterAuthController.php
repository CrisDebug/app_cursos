<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterAuthController extends Controller
{
    public function showregisterform()
    {
        return view('autenticacion.registro');
    }
    /** 
     * @param \illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
    */
    
    public function register(Request $request)
    {

        //validar datos del formulario
        $validateData = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email|max:255',
            'password'=>'required|confirmed|min:4',
        ]); 
        
        //crear un nuevo registro
        $user =User::create([
            'name'=>$validateData['name'],
            'email'=>$validateData['email'],
            'password'=>Hash::make($validateData['password']),
        ]);
        //crear la autenticacion
        Auth::login($user);
        
            return redirect()->route('cursosdisponibles.index')->with('success', 'Registro exitoso');
        
    }
}