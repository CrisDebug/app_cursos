@extends('layouts.plantilla')

@section('title', 'contactos')

@section('content')
<div class="p-8">
        <div class="div-frame">
                <div class="div-container">
                        <h1 class="title-form">Formulario contacto</h1>
                        <!--formulario de contacto-->
                        <div class="letter-name-form">
                                <form action="{{route('contactos.store')}}" method="POST">
                                @csrf
                                        <label for="">Nombre:
                                                <input type="text" id="name" name="name" class="input-text">
                                        </label>
                                        <label for="">Email:
                                                <input type="email" id="email" name="email" class="input-text">
                                        </label>
                                        <label for="">Mensaje:
                                                <textarea type="text" id="message" name="message" rows="4" class="input-text"></textarea>
                                        </label>                        
                                        <button type="submit" class="button-style">Enviar Mensaje</button>
                                </form>
                        </div>
                </div>
        </div>
</div>
@endsection