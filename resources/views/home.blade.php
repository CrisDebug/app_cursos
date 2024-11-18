@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
<div class="flex items-center justify-center p-8">
                <!--Home-->
                <div class="space-y-6">

                        <div class="min-h-screen flex flex-col justify-center items-center text-center">
                                <h1 class="text-6xl font-semibold text-violet-500">Aprende sin límites</h1>
                                <p class="text-lg text-orange-400 mb-6">Tenemos muchos cursos disponibles para ti.</p>
                                <button class="px-4 py-2 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-600">
                                    <a href="{{route('usuario.showregisterform')}}">Registrese</a>
                                </button>
                            </div>
                        
                </div> 
                
        </div>
        @endsection