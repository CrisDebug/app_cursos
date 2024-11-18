@extends('layouts.plantilla')

@section('title','edit')

@section('content')
<div class="p-8">
    <div class="div-frame">
        <div class="div-container">
            <h1 class="title-form">Editar Curso</h1>
            <!--fomrulario de edicion-->
            <div class="letter-name-form">
                <form id="form_create" action="{{route('cursos.update',$curso)}}" method="POST">
                    @csrf
                    @method('put')
                    <label for="">
                        Nombre:
                        <input type="text" name="name" value="{{ old('name',$curso->name) }}" id="name" class="input-text">
                    </label>
                    <!--validacion campo nombre-->
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                    <label for="">
                        Categoria:
                        <input type="text" name="categoria" value="{{ old('categoria',$curso->categoria) }}" id="categoria" class="input-text">
                    </label>
                            @error('categoria')
                                <span>{{ $message}}</span>
                            @enderror
                    <label for="">
                        Descripcion:
                        <textarea rows="5" name="descripcion" id="descripcion" class="input-text">{{ old('descripcion',$curso->descripcion) }}</textarea>
                    </label>
                            <!--validacion campo descripcion-->
                            @error('descripcion')
                                <span>{{ $message }}</span>
                            @enderror
                    <button type="submit" class="button-style">Editar Curso</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection