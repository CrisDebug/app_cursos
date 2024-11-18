@extends('layouts.plantilla')

@section('title','create')

@section('content')
<div class="p-8">
    <div class="div-frame">
        <div class="div-container">
            <h1 class="title-form">Creando un nuevo curso</h1>
            <!--formulario de creacion-->
            <div class="letter-name-form">
            <form id="form_create" action="{{route('cursos.store')}}" method="POST">
                @csrf
                <label for="">
                        Nombre:
                    <input type="text" value="{{old('name')}}" name="name" id="name" class="input-text">
                </label>
                    <!--validacion de blade campo nombre-->
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                <label for="">
                    Categoria:
                    <input type="text" name="categoria" id="categoria" class="input-text">
                </label>
                    <!--validacion de blade campo nombre-->
                            @error('categoria')
                                <span>{{ $message }}</span>
                            @enderror
                <label for="">
                        Descripcion:
                    <textarea rows="4" name="descripcion" id="descripcion" class="input-text"></textarea>
                </label>
                    <!--validacion de blade campo nombre-->
                            @error('descripcion')
                                <span>{{ $message }}</span>
                            @enderror
                <!--boton envio-->
                <button type="submit" 
                class="button-style">Crear Curso</button>
                <div id="errorDiv" style="color: red;"></div>
            </form>
                <!-- archivo validacion JavaScript -->
                <!--<script src="{{ asset('validacionesjs/formValidation.js') }}"></script>--> <!-- Carga tu archivo JS -->
        </div>
    </div>
</div>
@endsection