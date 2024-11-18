<!-- resources/views/components/footer.blade.php -->
<footer class="bg-cyan-400 py-14">
        
    <!-- Logo y descripción -->
    <div>
        {{-- <div class="text-center text-sm">
           <h1>[Cris_Debug]</h1>
        </div> --}}

        <!-- Redes sociales (íconos simplificados) -->
        <div class="flex items-center justify-center space-x-2 text-sm">
            <a href="#" class="text-gray-600 hover:text-slate-900">Facebook</a>
            <a href="#" class="text-gray-600 hover:text-slate-900">Twitter</a>
            <a href="#" class="text-gray-600 hover:text-slate-900">Instagram</a>
        </div>

        <!-- Derechos reservados -->
        <div class="text-slate-900 text-sm text-center">
            &copy; {{ date('Y') }} Cris_Debug. Todos los derechos reservados.
        </div>
    </div>
</footer>

