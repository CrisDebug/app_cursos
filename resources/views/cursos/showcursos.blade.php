@extends('layouts.plantilla')

@section('title','Cursos Disponibles')

@section('content')
    <div class="p-8">
        <div>
            <div class="list-div">
                <h1 class="title-form">Cursos Disponibles</h1>
                <!--Cursos Disponibles-->
                @foreach ($cursos as $curso)
                    <li class="list-style">
                        <a href="{{route('cursosdisponibles.index', $curso)}}">{{$curso->name}}</a>
                    </li>
                @endforeach
            </div>
            
            <!--paginacion-->
            <div class="flex items-center justify-center">
                
                    {{ $cursos->links() }}
                
            </div>
        </div>
        
    </div> 
    
@endsection