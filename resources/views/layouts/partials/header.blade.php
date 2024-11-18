<header class="w-full">
    <!--<h1 class="my-5 font-bold text-4xl text-left"></h1>-->
    <nav class="bg-gradient-to-t from-lime-50 to-violet-50 p-2 shadow-lg w-full h-14"> 
        <div class="flex items-center justify-between">
        <!--en este header se utiliza css puro y routeIs para resaltar 
            que se esta en la ruta asociada al item correcto-->
            <ul class="list-none 
                        flex items-center 
                        space-x-6 
                        w-full
                        h-full
                        font-bold">

                <li><a class="px-4 py-2 text-amber-400">[CRIS_DEBUG]</a></li>
                <li class="{{ request()->routeIs('home') ? 'active':''}}">
                    <a class="hover:bg-lime-100" href="{{route('home')}}">Home</a></li>
                <!--en esta linea se establece un asterisco para extender la funcionalidad a cualquier
                    ruta que comienze con cursos.*(podria ser index,destroy) o el metodo asociado a la ruta-->
        
                <li class="{{ request()->routeIs('nosotros') ? 'active' : ''}}">
                    <a href="{{route('nosotros')}}">Nosotros</a></li>

                <li class="{{request()->routeIs('cursosdisponibles.index') ? 'active' : ''}}">
                    <a href="{{route('cursosdisponibles.index')}}">Cursos Disponibles</a>
                
                    <li class="{{request()->routeIs('contactos.create') ? 'active' : ''}}">
                    <a href="{{route('contactos.create')}}">Contactanos</a>
                    
                <li class="{{ request()->routeIs('cursos.*') ? 'active' :''}}">
                    <a href="{{route('cursos.index')}}">Mantenedor</a></li>
                 <li>   
                 
                 </li>   
                </ul>
                <!--inicio session-->    
                <button class="text-slate-800 px-2 py-2 rounded hover:bg-lime-200 font-semibold whitespace-nowrap">
                    Iniciar Sesión
                </button>                
            </div>   
    </nav>
</header>