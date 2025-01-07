<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    ######## mostrar vista ######## 
    
    public function index()
    {
        return view('administracion.roles');
    }
    

    ############# mostrar usuarios y roles######
    
    public function show()
    {
        $users = User::with('roles')->get();//trae usuarios y roles
        $roles = Role::all();//lista de roles disponibles

        //retorna valores
        return view('administracion.roles',compact('users','roles'));
    }
    
}
