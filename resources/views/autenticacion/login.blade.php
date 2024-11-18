@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-screen shadow-lg">

                <div class="container max-w-lg mx-auto p-4">
                        <h1 class="title-form">Formulario Login</h1>
                        <!--formulario de contacto-->
                        
                                <form action="{{route('user.login')}}" method="POST">
                                @csrf
                                
                                        <label for="email">Email:
                                                <input type="email" id="email" name="email" class="input-text" value="{{ old('email') }}" required>
                                        </label>
                                        
                                        
                                        <label for="password">password:
                                                <input type="password" id="password" name="password" class="input-text" required></input>
                                        </label>   
                                        <!--error password-->
                                        @error('password')
                                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                                        @enderror


                                        <!--boton confirmacion-->                    
                                        <button type="submit" class="button-style">Ingresa</button>
                                </form>
                        
                </div>
       
</div>
@endsection