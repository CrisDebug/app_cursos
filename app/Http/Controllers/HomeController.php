<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //funcion invoke
    public function __invoke()
    {
        //return ('utilizando metodo invoke');
        return view('home');
    }
}
