<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=with-device initial-scale=1.0">
    
    <title>@yield('title')</title>
    <!--estilizar el menu de navegacion bajo una activacion-->
    <style>
        .active{
            color:rgba(230, 145, 19, 0.815);
            font-weight:bold;   
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

    <!--tailwind por archivo-->
    @vite('resources/css/app.css')
</head>
<body class="body-gradient flex flex-col min-h-screen ">
    <!--header-->
    <div>
    @include('componentes.navflex1')
    </div>
    <!--contenido de la pagina-->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!--footer-->
    <div>
        @include('layouts.partials.footer')
    </div>
</body>
</html>