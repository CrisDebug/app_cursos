@extends('layouts.plantilla')

@section('title', 'registro')

@section('content')                
                <div class="flex items-center justify-center min-h-screen shadow-lg">
                        
                    <div class="container max-w-lg mx-auto p-4">    
                                        
                        <h2 class="title-form">Registro</h2>
                        
                        <!--form autenticacion-->
                        <form action="{{ route('usuario.register') }}" method="POST">    
                                @csrf
                                
                                        <!--campo name-->
                                        <label for="name">Nombre:   
                                                <input type="text" id="name" name="name" value="{{ old('name')}}" class="input-text" required>
                                        </label>
                                                <!--mensaje error-->
                                                @error('name')
                                                <div>{{ $message }}</div>
                                                @enderror


                                        <!--campo email-->        
                                        <label for="email">Email:
                                                <input type="email" id="email" name="email" value="{{ old('email')}}"class="input-text" required>
                                        </label>

                                        <!--campo password-->
                                        <label for="password">Clave:
                                                <input type="password" id="password" name="password" class="input-text" required>                                                
                                        </label>  
                                        
                                        <!-- Campo de confirmación de contraseña -->
                                        <label for="password_confirmation">Confirmar contraseña</label>
                                        <input id="password_confirmation" type="password" name="password_confirmation" class="input-text" required>
                                        
                                        @error('password_confirmation')
                                                <div>{{ $message }}</div>
                                        @enderror       

                                        <!--ingresa-->
                                        <button type="submit" class="button-style">Ingresa</button>
                        </form>
                    </div>
            </div>
@endsection