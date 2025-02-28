@extends('layouts.public')

@section('titulo', 'inicio')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gray-900 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 bg-gray-900">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-16 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 id="typed-title" class="animate-fade-up text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block">Protege tu mundo digital</span>
                        <span class="block text-blue-500 xl:inline">con soluciones innovadoras</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Descubre cómo nuestras soluciones de ciberseguridad de última generación protegen tu información y activos digitales contra las amenazas más sofisticadas.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#servicios" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                Comenzar ahora
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div class="h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full bg-gray-800 flex items-center justify-center">
            <div class="p-8 space-y-6 animate-pulse">
                <div class="grid grid-cols-3 gap-4">
                    <div class="h-4 bg-blue-500 rounded w-3/4"></div>
                    <div class="h-4 bg-blue-400 rounded"></div>
                    <div class="h-4 bg-blue-300 rounded w-5/6"></div>
                </div>
                <div class="h-4 bg-blue-500 rounded w-1/2"></div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="h-4 bg-blue-400 rounded w-3/4"></div>
                    <div class="h-4 bg-blue-300 rounded"></div>
                    <div class="h-4 bg-blue-500 rounded w-5/6"></div>
                    <div class="h-4 bg-blue-400 rounded w-1/2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="py-12 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 transition-all duration-500">
            <!-- Stat 1 -->
            <div class="bg-gray-900 rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="text-4xl font-bold text-blue-500 mb-2">
                    <span class="counter" data-target="99.9">0</span>%
                </div>
                <div class="text-gray-300">Uptime de Servicio</div>
            </div>
            <!-- Stat 2 -->
            <div class="bg-gray-900 rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="text-4xl font-bold text-blue-500 mb-2">
                    <span class="counter" data-target="1000">0</span>+
                </div>
                <div class="text-gray-300">Amenazas Bloqueadas</div>
            </div>
            <!-- Stat 3 -->
            <div class="bg-gray-900 rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="text-4xl font-bold text-blue-500 mb-2">
                    <span class="counter" data-target="500">0</span>+
                </div>
                <div class="text-gray-300">Clientes Protegidos</div>
            </div>
            <!-- Stat 4 -->
            <div class="bg-gray-900 rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="text-4xl font-bold text-blue-500 mb-2">
                    <span class="counter" data-target="24">0</span>/7
                </div>
                <div class="text-gray-300">Soporte Técnico</div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-12 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Características</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Seguridad de próxima generación</p>
        </div>

        <div class="mt-10">
            <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                <!-- Feature 1 -->
                <div class="relative p-6 bg-gray-800 rounded-lg transform hover:scale-105 transition-all duration-300">
                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div class="ml-16">
                        <h3 class="text-lg leading-6 font-medium text-white">Protección Avanzada</h3>
                        <p class="mt-2 text-base text-gray-300">Sistemas de seguridad de última generación que protegen contra amenazas conocidas y emergentes.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="relative p-6 bg-gray-800 rounded-lg transform hover:scale-105 transition-all duration-300">
                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="ml-16">
                        <h3 class="text-lg leading-6 font-medium text-white">Monitoreo 24/7</h3>
                        <p class="mt-2 text-base text-gray-300">Vigilancia continua de tu infraestructura digital para detectar y responder a amenazas en tiempo real.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="relative p-6 bg-gray-800 rounded-lg transform hover:scale-105 transition-all duration-300">
                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="ml-16">
                        <h3 class="text-lg leading-6 font-medium text-white">Respuesta Rápida</h3>
                        <p class="mt-2 text-base text-gray-300">Equipo de respuesta inmediata ante incidentes de seguridad las 24 horas del día.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Threat Map Section -->
<div class="py-12 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Mapa de Amenazas</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Monitoreo Global en Tiempo Real</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 shadow-xl">
            <div id="threat-map" class="h-96 w-full rounded-lg overflow-hidden">
                <!-- Placeholder for threat map visualization -->
                <div class="h-full w-full bg-gray-800 flex items-center justify-center">
                    <div class="text-gray-400 text-center">
                        <i class="fas fa-globe text-6xl mb-4"></i>
                        <p>Mapa de amenazas en tiempo real</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Feed Section -->
<div class="py-12 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Últimas Noticias</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Actualizaciones de Seguridad</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News Item 1 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
                <div class="p-6">
                    <div class="text-blue-500 text-sm font-semibold mb-2">ÚLTIMA HORA</div>
                    <h3 class="text-white text-xl font-bold mb-2">Nueva vulnerabilidad detectada</h3>
                    <p class="text-gray-300">Descubierta una nueva vulnerabilidad que afecta a sistemas críticos. Actualizaciones disponibles.</p>
                </div>
            </div>
            <!-- News Item 2 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
                <div class="p-6">
                    <div class="text-blue-500 text-sm font-semibold mb-2">ANÁLISIS</div>
                    <h3 class="text-white text-xl font-bold mb-2">Tendencias en ciberataques</h3>
                    <p class="text-gray-300">Análisis de las últimas tendencias en ciberataques y cómo protegerse efectivamente.</p>
                </div>
            </div>
            <!-- News Item 3 -->
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
                <div class="p-6">
                    <div class="text-blue-500 text-sm font-semibold mb-2">GUÍA</div>
                    <h3 class="text-white text-xl font-bold mb-2">Mejores prácticas de seguridad</h3>
                    <p class="text-gray-300">Guía actualizada sobre las mejores prácticas de seguridad para empresas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-blue-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
            <span class="block">¿Listo para proteger tu negocio?</span>
            <span class="block text-blue-200">Contáctanos hoy mismo.</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50">
                    Solicitar demo
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
    
