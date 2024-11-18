@extends('layouts.plantilla')
@section('title','nosotros')
@section('content')
    <div class="flex items-center justify-center min-h-screen p-8">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                <!-- Tarjeta: Nuestra Misión -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="/path/to/mission-icon.png" alt="Misión" class="w-12 h-12 mx-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Nuestra Misión</h3>
                    <p class="mt-2 text-gray-600 text-center">Empoderar a estudiantes de todo el mundo para aprender y desarrollar habilidades esenciales en cualquier momento y lugar.</p>
                </div>
                
                <!-- Tarjeta: Equipo de Expertos -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="/path/to/team-icon.png" alt="Equipo de Expertos" class="w-12 h-12 mx-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Equipo de Expertos</h3>
                    <p class="mt-2 text-gray-600 text-center">Contamos con instructores altamente calificados, profesionales con experiencia en sus respectivas áreas.</p>
                </div>
                <!-- Tarjeta: Aprendizaje Flexible -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="/path/to/flexible-learning-icon.png" alt="Aprendizaje Flexible" class="w-12 h-12 mx-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Aprendizaje Flexible</h3>
                    <p class="mt-2 text-gray-600 text-center">Accede a nuestros cursos desde cualquier dispositivo y aprende a tu propio ritmo, adaptado a tu horario.</p>
                </div>
                <!-- Tarjeta: Certificación -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="/path/to/certification-icon.png" alt="Certificación" class="w-12 h-12 mx-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Certificación</h3>
                    <p class="mt-2 text-gray-600 text-center">Obtén certificados al finalizar los cursos y mejora tu perfil profesional con habilidades prácticas.</p>
                </div>

                <!-- Tarjeta 1 -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <p class="text-4xl text-center text-slate-800 font-extrabold">Aprende Rápido</p>
                    <p class="mt-4 text-gray-600 text-center">Descubre métodos efectivos y aprende más rápido de lo que imaginas.</p>
                </div>
                
                <!-- Tarjeta 2 -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <p class="text-4xl text-center text-slate-800 font-extrabold">Aprende en cualquier momento</p>
                    <p class="mt-4 text-gray-600 text-center">Accede a contenido educativo las 24 horas, donde sea que estés.</p>
                </div>
                <!-- Tarjeta 3 -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <p class="text-4xl text-center text-slate-800 font-extrabold">Aprende sin límites</p>
                    <p class="mt-4 text-gray-600 text-center">No pongas límites a tu aprendizaje. Cubre todo el contenido que quieras.</p>
                </div>
                <!-- Tarjeta 3 -->
                <div class="bg-gradient-to-t from-lime-100 p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <p class="text-4xl text-center text-slate-800 font-extrabold">Tu eres tu mejor version</p>
                    <p class="mt-4 text-gray-600 text-center">Supera tus propias expectativas y aprende haciendo.</p>
                </div>
            </div>
    </div>
@endsection