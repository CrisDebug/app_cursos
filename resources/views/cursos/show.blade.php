@extends('layouts.plantilla')

@section('title','show ' . $curso->name)

@section('content')
@if($errors->any())
<!--mostrar los errores de validacion-->
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- mostrar mensaje de exito-->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}        
    </div>
@endif
<div class="p-8">
    <div class="div-frame">
<div class="div-container">
    <h1 class="title-h1">Este es el curso de 
        <span class="text-orange-500">{{$curso->name}}</span></h1>
        <a href="{{route('cursos.index')}}" class="button-link">
            Volver a cursos</a>
        <a href="{{route('cursos.edit', $curso)}}" class="button-link">
            Editar curso</a>
        <p class="my-5 text-zinc-800">Descripcion: <strong>{{$curso->descripcion}}</strong></p>
        <p class="text-zinc-800 text-lg">categoria: <strong>{{$curso->categoria}}</strong></p>
        <!--formulario delete-->
        <form action="{{route('cursos.destroy', $curso)}}" method="post" class="mt-8">
            @csrf
            @method('delete')
            <button type="submit" class="button-delete">Eliminar curso</button>
        </form>
</div>
    </div>
</div>
@endsection