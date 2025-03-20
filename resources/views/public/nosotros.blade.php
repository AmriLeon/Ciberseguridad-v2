@extends ('layouts.public')

@section('titulo','nosotros')

@section('content')
<!-- About Congress Section -->


<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Sobre Nosotros</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Congreso Internacional de Ciberseguridad</p>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm p-6 rounded-lg shadow-xl hover:bg-opacity-70 transition-all duration-300 hover:border-3 hover:border-blue-500 rounded-lg p-4">
                    <h3 class="text-xl font-bold text-blue-500 mb-4">Nuestra Misión</h3>
                    <p class="text-gray-300">Promover la excelencia en ciberseguridad a través del intercambio de conocimientos, la colaboración internacional y la formación continua, creando un espacio donde expertos, profesionales y estudiantes puedan compartir experiencias y mejores prácticas para fortalecer la seguridad digital global.</p>
                </div>
                <!-- Vision -->
                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm p-6 rounded-lg shadow-xl hover:bg-opacity-70 transition-all duration-300 hover:border-3 hover:border-blue-500 rounded-lg p-4">
                    <h3 class="text-xl font-bold text-blue-500 mb-4">Nuestra Visión</h3>
                    <p class="text-gray-300">Ser el referente internacional en eventos de ciberseguridad, liderando la innovación y el desarrollo profesional en el campo de la seguridad digital, y contribuyendo activamente a la creación de un ciberespacio más seguro y resiliente para todos.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Speakers Section -->
<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Ponentes Destacados</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Expertos en Ciberseguridad</p>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-300">Conoce a nuestros distinguidos ponentes internacionales que compartirán sus conocimientos y experiencias en el congreso.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Speaker 1 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-blue-500">
                <div class="aspect-w-16 aspect-h-9 relative">
                    <img src="{{ asset('images/speaker1.jpg') }}" alt="Speaker 1" class="object-cover w-full h-48">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white">Dr. Juan Pérez</h3>
                    <p class="text-blue-500 mb-2">Director de Seguridad, CyberTech Global</p>
                    <p class="text-gray-300 text-sm">Experto en ciberseguridad con más de 15 años de experiencia en protección de infraestructuras críticas y respuesta a incidentes.</p>
                </div>
            </div>
            <!-- Speaker 2 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-blue-500">
                <div class="aspect-w-16 aspect-h-9 relative">
                    <img src="{{ asset('images/speaker2.jpg') }}" alt="Speaker 2" class="object-cover w-full h-48">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white">Dra. Ana García</h3>
                    <p class="text-blue-500 mb-2">Investigadora Principal, Instituto de Seguridad Digital</p>
                    <p class="text-gray-300 text-sm">Especialista en criptografía cuántica y seguridad de redes neuronales con múltiples publicaciones internacionales.</p>
                </div>
            </div>
            <!-- Speaker 3 -->
            <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-blue-500">
                <div class="aspect-w-16 aspect-h-9 relative">
                    <img src="{{ asset('images/speaker3.jpg') }}" alt="Speaker 3" class="object-cover w-full h-48">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white">Ing. Carlos Rodríguez</h3>
                    <p class="text-blue-500 mb-2">CISO, TechSecure Solutions</p>
                    <p class="text-gray-300 text-sm">Líder en implementación de estrategias de seguridad empresarial y conformidad normativa en América Latina.</p>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Schedule Section -->
 <div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
 <div id="agenda" class="py-16 bg-gray-800/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-base text-blue-400 font-semibold tracking-wide uppercase neon-title-blue">Agenda del Congreso</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Programa de Actividades</p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Day 1 -->
                    <div class="p-6 rounded-lg bg-black border-2 border-blue-500 transition-all duration-300 hover:shadow-[0_0_15px_#346ca4,0_0_30px_rgba(52,108,164,0.3),0_0_45px_rgba(52,108,164,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <h3 class="text-xl font-bold text-blue-400 mb-4">Día 1 - Fundamentos</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">09:00</span>
                                <div>
                                    <p class="text-white font-medium">Ceremonia de Apertura</p>
                                    <p class="text-gray-400 text-sm">Bienvenida e introducción al congreso</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">10:30</span>
                                <div>
                                    <p class="text-white font-medium">Ciberseguridad 101</p>
                                    <p class="text-gray-400 text-sm">Conceptos básicos y panorama actual</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">14:00</span>
                                <div>
                                    <p class="text-white font-medium">Taller Práctico</p>
                                    <p class="text-gray-400 text-sm">Herramientas básicas de seguridad</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Day 2 -->
                    <div class="p-6 rounded-lg bg-black border-2 border-blue-500 transition-all duration-300 hover:shadow-[0_0_15px_#346ca4,0_0_30px_rgba(52,108,164,0.3),0_0_45px_rgba(52,108,164,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <h3 class="text-xl font-bold text-blue-400 mb-4">Día 2 - Técnicas Avanzadas</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">09:00</span>
                                <div>
                                    <p class="text-white font-medium">Ethical Hacking</p>
                                    <p class="text-gray-400 text-sm">Metodologías y mejores prácticas</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">11:30</span>
                                <div>
                                    <p class="text-white font-medium">Forense Digital</p>
                                    <p class="text-gray-400 text-sm">Análisis y recuperación de evidencias</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">15:00</span>
                                <div>
                                    <p class="text-white font-medium">CTF Challenge</p>
                                    <p class="text-gray-400 text-sm">Competencia práctica de habilidades</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Day 3 -->
                    <div class="p-6 rounded-lg bg-black border-2 border-blue-500 transition-all duration-300 hover:shadow-[0_0_15px_#346ca4,0_0_30px_rgba(52,108,164,0.3),0_0_45px_rgba(52,108,164,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <h3 class="text-xl font-bold text-blue-400 mb-4">Día 3 - Futuro Profesional</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">09:00</span>
                                <div>
                                    <p class="text-white font-medium">Tendencias Emergentes</p>
                                    <p class="text-gray-400 text-sm">IA y Ciberseguridad</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">11:00</span>
                                <div>
                                    <p class="text-white font-medium">Panel de Expertos</p>
                                    <p class="text-gray-400 text-sm">Oportunidades laborales en ciberseguridad</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">16:00</span>
                                <div>
                                    <p class="text-white font-medium">Ceremonia de Clausura</p>
                                    <p class="text-gray-400 text-sm">Entrega de certificados</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Organizing Committee Section -->

<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Nuestro Equipo</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Comité Organizador</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Committee Member 1 -->
            <div class="text-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-blue-500 rounded-lg p-6">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/carmen_santiago.jpg') }}" alt="Director" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-medium text-white">M. C. María del Carmen Santiago Díaz</h3>
                <p class="text-base text-gray-300 mt-2">Coordinadora</p>
            </div>
            <!-- Committee Member 2 -->
            <div class="text-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-blue-500 rounded-lg p-6">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/gustavo_rubin.jpg') }}" alt="Coordinadora" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-medium text-white">Dr. Gustavo Trinidad Rubín Linares</h3>
                <p class="text-base text-gray-300 mt-2">Coordinador</p>
            </div>
            <!-- Committee Member 3 -->
            <div class="text-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-blue-500 rounded-lg p-6">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/claudia_zenteno.jpg') }}" alt="Technical" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-medium text-white">M. C. Ana Claudia Zenteno Vázquez</h3>
                <p class="text-base text-gray-300 mt-2">Colaboradora</p>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->


<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Alianzas</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <!-- Partner Logos -->
            <div class="bg-gray-900/90 p-8 rounded-lg flex items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-white">
                <img src="{{ asset('images/logo_fcc.png') }}" alt="Partner 1" class="max-h-32">
            </div>
             
            <div class="bg-gray-900/90 p-8 rounded-lg flex items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-white">
                <img src="{{ asset('images/Cisco.webp') }}" alt="Partner 2" class="max-h-32">
            </div>
            <div class="bg-gray-900/90 p-8 rounded-lg flex items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-white">
                <img src="{{ asset('images/ISACA.jpg') }}" alt="Partner 3" class="max-h-32">
            </div>
        </div>
    </div>
</div>
@endsection
    