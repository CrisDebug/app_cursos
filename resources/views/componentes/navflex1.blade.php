<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=with-device initial-scale=1.0">
    @vite('resources\css\graficaconfig.css')
</head>
    <header class="shadow-lg">
        <div class="flex items-center justify-between px-4">
        <nav class="flex">
            <ul class="flex">
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-violet-500" href="#">[CRIS_DEBUG]</a></li>
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-slate-700" href="{{route('home')}}">Home</a></li>
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-slate-700" href="{{route('nosotros')}}">Nosotros</a></li>
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-slate-700" href="{{route('cursosdisponibles.index')}}">Cursos</a></li>
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-slate-700" href="{{route('contactos.create')}}">Contactanos</a></li>
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-slate-700" href="{{route('cursos.index')}}">Mantenedor</a></li>
                <li class=""><a class="px-2 py-4 w-full h-full block hover:bg-cyan-200 transition duration-800 font-semibold text-slate-700" href="{{route('roles.users.index')}}">Gestion</a></li>
            </ul>
        </nav> 
            <!--botones de session--> 
            <div> 
                <!--boton registro-->
                <button class="text-white px-2 py-4 hover:bg-orange-500 font-semibold whitespace-nowrap bg-orange-400">
                    <a href="{{ route('usuario.showregisterform') }}">Registrese</a>
                </button> 
                <!--boton login-->  
                <button class="text-slate-800 px-2 py-4 hover:bg-cyan-200 font-semibold whitespace-nowrap bg-cyan-100">
                    <a href="{{ route('login.show')}}">Iniciar Sesión</a>
                </button> 

                <!--formulario logout-->
                <form action="{{route('user.logout')}}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="text-slate-800 bg-cyan-100 px-2 py-4 hover:bg-cyan-200 font-semibold whitespace-nowrap">
                        Cerrar Sesión
                    </button>
                </form>
                
                
            </div> 
        </div>
    </header>