@extends('layouts.public')

@section('titulo', 'Inicio')

@section('content')
<!-- Background GIF Container -->
<div class="fixed inset-0 z-0"></div>

<!-- Hero Section -->
<div class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                <span id="typed-title"></span>
            </h1>
            <p class="text-lg md:text-xl text-blue-200 mb-8 max-w-2xl mx-auto">
                Unite a los expertos en el campo de la ciberseguridad para explorar las últimas tendencias, tecnologías y estrategias de protección digital.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                    Registrarse
                </a>
                <a href="{{ route('nosotros') }}" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                    Más Información
                </a>
            </div>
        </div>
    </div>


    <!-- Enhanced background pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzJhNGE3ZiIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-5"></div>
    
    <!-- Animated particles effect -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute w-2 h-2 bg-blue-500 rounded-full animate-float" style="top: 20%; left: 30%;"></div>
        <div class="absolute w-2 h-2 bg-blue-400 rounded-full animate-float delay-1000" style="top: 60%; left: 70%;"></div>
        <div class="absolute w-2 h-2 bg-blue-300 rounded-full animate-float delay-2000" style="top: 80%; left: 40%;"></div>
    </div>
</div>

<!-- Features Section -->
<div class="py-8 sm:py-12 bg-gradient-to-b to-blue-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-sm sm:text-base text-blue-500 font-semibold tracking-wide uppercase">Tracks del Congreso</h2>
            <p class="mt-2 text-2xl sm:text-3xl leading-8 font-extrabold tracking-tight text-white md:text-4xl">Temas Principales</p>
        </div>

        <div class="mt-6 sm:mt-10">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 md:gap-x-8 md:gap-y-10">
                <!-- Track cards with responsive spacing -->
                <div class="relative p-4 sm:p-6 bg-gradient-to-br from-gray-800/80 to-black rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500">
                    <div class="absolute flex items-center justify-center h-10 w-10 sm:h-12 sm:w-12 rounded-md bg-blue-500/80 text-white">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div class="ml-14 sm:ml-16">
                        <h3 class="text-base sm:text-lg leading-6 font-medium text-white">Seguridad Cloud</h3>
                        <p class="mt-2 text-sm sm:text-base text-gray-300">Estrategias avanzadas para proteger infraestructuras en la nube y datos críticos.</p>
                    </div>
                </div>
                <!-- Track 2 -->
                <div class="relative p-6 bg-gradient-to-br from-gray-800/80 to-black rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500">
                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500/80 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="ml-16">
                        <h3 class="text-lg leading-6 font-medium text-white">Ethical Hacking</h3>
                        <p class="mt-2 text-base text-gray-300">Técnicas y metodologías de penetration testing y hacking ético.</p>
                    </div>
                </div>

                <!-- Track 3 -->
                <div class="relative p-6 bg-gradient-to-br from-gray-800/80 to-black rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500">
                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500/80 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="ml-16">
                        <h3 class="text-lg leading-6 font-medium text-white">Ciberinteligencia</h3>
                        <p class="mt-2 text-base text-gray-300">Análisis de amenazas y estrategias de inteligencia para prevención de ataques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Congress Details Section -->
<div class="py-16 bg-gray-900/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Event Objective -->
        <div class="text-center mb-16">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Sobre el Congreso</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Objetivos</p>
            <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-300">
                Crear un espacio de intercambio de conocimientos y experiencias en ciberseguridad, fomentando la colaboración entre profesionales, académicos y estudiantes para fortalecer la seguridad digital global.
            </p>
        </div>

        <!-- Areas Temáticas Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <div class="relative p-4 sm:p-6 bg-gradient-to-br from-blue-900 to-cyan-800 rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500">
                <div class="text-blue-500 mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-white mb-2">Criptografía Avanzada</h3>
                <p class="text-gray-300">Blockchain, cifrado cuántico y protocolos de seguridad de última generación.</p>
            </div>
            <div class="relative p-4 sm:p-6 bg-gradient-to-br from-blue-900 to-cyan-800 rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500">
                <div class="text-blue-500 mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-white mb-2">Análisis Forense Digital</h3>
                <p class="text-gray-300">Técnicas y herramientas para la investigación de incidentes de seguridad.</p>
            </div>
            <div class="relative p-4 sm:p-6 bg-gradient-to-br from-blue-900 to-cyan-800 rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500">
                <div class="text-blue-500 mb-4">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-white mb-2">IoT Security</h3>
                <p class="text-gray-300">Seguridad en dispositivos conectados y sistemas embebidos.</p>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="bg-gradient-to-br from-blue-900 to-cyan-800 rounded-lg p-8 mb-16 rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-blue-500 ">
            <h3 class="text-2xl font-bold text-white mb-6">¿Por qué asistir?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Networking Profesional</h4>
                        <p class="mt-2 text-gray-300">Conecta con expertos y profesionales de la industria.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Oportunidades Laborales</h4>
                        <p class="mt-2 text-gray-300">Contacto directo con empresas del sector tecnológico.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Countdown Section -->
<div class="py-8 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative p-6 bg-gradient-to-br from-cyan-800 to-white rounded-lg transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-cyan-500 text-center">
            <h2 class="text-xl sm:text-2xl font-bold text-white mb-4 sm:mb-6">Tiempo restante para el evento</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-8 max-w-3xl mx-auto">
                <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] p-3 sm:p-6 rounded-lg shadow-lg hover:shadow-blue-500/20 transition-all duration-300">
                    <span id="days" class="block text-2xl sm:text-4xl font-bold text-white">00</span>
                    <span class="text-xs sm:text-sm text-gray-200">Días</span>
                </div>
                <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] p-3 sm:p-6 rounded-lg shadow-lg hover:shadow-blue-500/20 transition-all duration-300">
                    <span id="hours" class="block text-2xl sm:text-4xl font-bold text-white">00</span>
                    <span class="text-xs sm:text-sm text-gray-200">Horas</span>
                </div>
                <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] p-3 sm:p-6 rounded-lg shadow-lg hover:shadow-blue-500/20 transition-all duration-300">
                    <span id="minutes" class="block text-2xl sm:text-4xl font-bold text-white">00</span>
                    <span class="text-xs sm:text-sm text-gray-200">Minutos</span>
                </div>
                <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] p-3 sm:p-6 rounded-lg shadow-lg hover:shadow-blue-500/20 transition-all duration-300">
                    <span id="seconds" class="block text-2xl sm:text-4xl font-bold text-white">00</span>
                    <span class="text-xs sm:text-sm text-gray-200">Segundos</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="py-8 sm:py-12 bg-gray-800/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-4 transition-all duration-500">
            <!-- Stat 1 -->
            <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-cyan-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="50">0</span>+
                </div>
                <div class="text-sm sm:text-base text-gray-300">Ponentes Expertos</div>
            </div>
            <!-- Stat 2 -->
            <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-cyan-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="1000">0</span>+
                </div>
                <div class="text-sm sm:text-base text-gray-300">Asistentes Esperados</div>
            </div>
            <!-- Stat 3 -->
            <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-cyan-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="30">0</span>+
                </div>
                <div class="text-sm sm:text-base text-gray-300">Talleres Prácticos</div>
            </div>
            <!-- Stat 4 -->
            <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:border-3 hover:border-cyan-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="3">0</span>
                </div>
                <div class="text-sm sm:text-base text-gray-300">Días de Evento</div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Testimonials Section -->
<div class="py-12 bg-gray-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-gray-500/80 to-[#17A2B8] rounded-lg p-8">
            <h3 class="text-2xl font-bold text-white mb-8 text-center">Testimonios de Ediciones Anteriores</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-cyan-400/50 to-white p-6 rounded-lg">
                    <p class="text-gray mb-4">"Una experiencia única que me ayudó a definir mi carrera en ciberseguridad. Los talleres prácticos fueron invaluables."</p>
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-blue">María González</p>
                            <p class="text-sm text-gray">Estudiante - Edición 2023</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-cyan-400/50 to-white p-6 rounded-lg">
                    <p class="text-gray mb-4">"El nivel de los ponentes y el contenido técnico superó mis expectativas. Definitivamente volveré este año."</p>
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-blue">David Martínez</p>
                            <p class="text-sm text-gray">Profesional IT - Edición 2023</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-cyan-400/50 to-white p-6 rounded-lg">
                    <p class="text-gray mb-4">"Las sesiones de networking fueron excelentes. Conseguí mi primer trabajo en ciberseguridad gracias a los contactos que hice."</p>
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-blue">Ana Pérez</p>
                            <p class="text-sm text-gray">Security Analyst - Edición 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-gradient-to-br from-gray-100/80 to-[#17A2B8]">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
            <span class="block">¿Listo para ser parte del evento?</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="#registro" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-900/80 hover:bg-blue-50">
                    Registrarse
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/countdown.js') }}"></script>
@endsection
    