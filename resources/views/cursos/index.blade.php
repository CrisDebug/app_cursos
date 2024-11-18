@extends('layouts.plantilla')

@section('title','index')

@section('content')
    <div class="p-8">
        <div class="div-frame">
            <div class="list-div">
                <h1 class="title-form">Lista de cursos</h1>
                    <div class="pl-0 p-4">
                            <a href="{{route('cursos.create')}}" class="button-link">Crear un curso</a>
                    </div>
                <!--listar los cursos-->
                @foreach ($cursos as $curso)
                    <li class="list-style">
                        <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
                    </li>
                @endforeach
            </div>
                {{ $cursos->links() }}
        </div>
    </div> 
@endsection