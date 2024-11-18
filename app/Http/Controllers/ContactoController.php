<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use App\Models\Contacto;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    //index para listar todos los correos 
    /*public function index()
    {
        $contactos = Contacto::all();
        return view('contactos', compact('contactos'));
    }*/
    //metodo create muestar el formulario , para crear un nuevo contacto
        public function create()
        {
            return view('contactos.contactos');
        }
    //metodo store para crear un nuevo contacto
    public function store(Request $request)
    {
        //validar contacto
        $validateData= $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'message'   => 'required',

        ]);
        //crear el contacto
        Contacto::create($validateData);
        //enviar correo al administrador
        $correo= new ContactanosMailable($validateData);
        //enviar una confimacion a la persona que lleno el formulario
        Mail::to($validateData['email'])->send($correo);
        //retornar o redirijir
        return redirect()->route('contactos.create')->with('success','contacto creado con exito');
    }

}
