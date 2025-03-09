@extends ('layouts.public')

@section('titulo','noticias')

@section('content')

<div class="bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-[#1D61A9] sm:text-4xl">
                Noticias y Actualizaciones
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-300 sm:mt-4">
                Últimas noticias sobre ciberseguridad y el congreso
            </p>
        </div>

        <!-- Featured Article -->
        <div class="mb-12 bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-xl">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset ('images/Noticia.webp') }}" alt="Featured article image">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-[#1D61A9] font-semibold">Destacado</div>
                    <h2 class="block mt-1 text-2xl leading-tight font-bold text-white">
                        Nuevas Tendencias en Ciberataques 2024
                    </h2>
                    <p class="mt-2 text-gray-300">
                        Análisis detallado de las últimas tendencias en ciberataques y cómo las organizaciones pueden prepararse.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Article 1 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia1.webp') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#1D61A9] text-sm font-semibold mb-2">SEGURIDAD</div>
                    <h3 class="text-xl font-bold text-white mb-2">Protección contra Ransomware</h3>
                    <p class="text-gray-300 mb-4">Estrategias efectivas para proteger tu organización contra ataques de ransomware.</p>
                    <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia.jpg') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#1D61A9] text-sm font-semibold mb-2">CONFERENCIA</div>
                    <h3 class="text-xl font-bold text-white mb-2">Speakers Confirmados</h3>
                    <p class="text-gray-300 mb-4">Conoce a los expertos internacionales que participarán en nuestro congreso.</p>
                    <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia4.png') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#1D61A9] text-sm font-semibold mb-2">TALLERES</div>
                    <h3 class="text-xl font-bold text-white mb-2">Workshops Prácticos</h3>
                    <p class="text-gray-300 mb-4">Descubre los talleres hands-on que tendremos en esta edición del congreso.</p>
                    <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>
        </div>

        <!-- Hidden Articles (Initially Hidden) -->
        <div id="hidden-articles" class="hidden grid gap-8 md:grid-cols-2 lg:grid-cols-3 mt-8">
            <!-- Article 4 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia5.webp') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#1D61A9] text-sm font-semibold mb-2">INVESTIGACIÓN</div>
                    <h3 class="text-xl font-bold text-white mb-2">Inteligencia Artificial en Ciberseguridad</h3>
                    <p class="text-gray-300 mb-4">Avances y aplicaciones de la IA en la detección y prevención de amenazas cibernéticas.</p>
                    <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia6.jpg') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#1D61A9]text-sm font-semibold mb-2">REGULACIÓN</div>
                    <h3 class="text-xl font-bold text-white mb-2">Nuevas Normativas de Seguridad</h3>
                    <p class="text-gray-300 mb-4">Actualizaciones en las regulaciones internacionales de protección de datos y privacidad.</p>
                    <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia3.png') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#1D61A9] text-sm font-semibold mb-2">INNOVACIÓN</div>
                    <h3 class="text-xl font-bold text-white mb-2">Blockchain en Ciberseguridad</h3>
                    <p class="text-gray-300 mb-4">Implementaciones innovadoras de blockchain para mejorar la seguridad digital.</p>
                    <a href="#" class="text-[#1D61A9] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button onclick="toggleArticles()" class="bg-[#1D61A9] hover:bg-[#057BBF] text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Cargar más noticias
            </button>
        </div>

        <script>
            function toggleArticles() {
                const hiddenArticles = document.getElementById('hidden-articles');
                const button = event.target;
                
                if (hiddenArticles.classList.contains('hidden')) {
                    hiddenArticles.classList.remove('hidden');
                    button.textContent = 'Mostrar menos';
                } else {
                    hiddenArticles.classList.add('hidden');
                    button.textContent = 'Cargar más noticias';
                }
            }
        </script>
    </div>
</div>
@endsection
    