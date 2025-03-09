@extends ('layouts.public')

@section('titulo','nosotros')

@section('content')
<!-- About Congress Section -->
<!-- Background GIF Container -->


<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-cyan-500 font-semibold tracking-wide uppercase">Sobre Nosotros</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Congreso Internacional de Ciberseguridad</p>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-gray-800/40 backdrop-blur-sm p-6 rounded-lg shadow-xl hover:bg-gray-800/60 transition-all duration-300 border-4 border-cyan-500/30 hover:border-cyan-500/50 group">
                    <h3 class="text-xl font-bold text-cyan-500 bg-clip-text mb-4 group-hover:scale-105 transition-transform duration-300">Nuestra Misión</h3>
                    <p class="text-gray-300 group-hover:text-gray-200 transition-colors duration-300">Promover la excelencia en ciberseguridad a través del intercambio de conocimientos, la colaboración internacional y la formación continua, creando un espacio donde expertos, profesionales y estudiantes puedan compartir experiencias y mejores prácticas para fortalecer la seguridad digital global.</p>
                </div>
                <!-- Vision -->
                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm p-6 rounded-lg shadow-xl hover:bg-opacity-70 transition-all duration-300 border-4 border-cyan-500/30 hover:border-cyan-500/50 group">
                    <h3 class="text-xl font-bold text-cyan-500 bg-clip-text mb-4 group-hover:scale-105 transition-transform duration-300">Nuestra Visión</h3>
                    <p class="text-gray-300">Ser el referente internacional en eventos de ciberseguridad, liderando la innovación y el desarrollo profesional en el campo de la seguridad digital, y contribuyendo activamente a la creación de un ciberespacio más seguro y resiliente para todos.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Organizing Committee Section -->
<!-- Background GIF Container -->


<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-cyan-500 font-semibold tracking-wide uppercase">Nuestro Equipo</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Comité Organizador</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Committee Member 1 -->
            <div class="text-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-cyan-500 rounded-lg p-4">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-white-500">
                    <img src="{{ asset('images/carmen_santiago.jpg') }}" alt="Director" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">M. C. María del Carmen Santiago Díaz</h3>
                <p class="text-sm text-gray-300">Coordinadora</p>
            </div>
            <!-- Committee Member 2 -->
            <div class="text-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-cyan-500 rounded-lg p-4">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-white-500">
                    <img src="{{ asset('images/gustavo_rubin.jpg') }}" alt="Coordinadora" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">Dr. Gustavo Trinidad Rubín Linares</h3>
                <p class="text-sm text-gray-300">Coordinador</p>
            </div>
            <!-- Committee Member 3 -->
            <div class="text-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-cyan-500 rounded-lg p-4">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-white-500">
                    <img src="{{ asset('images/claudia_zenteno.jpg') }}" alt="Technical" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">M. C. Ana Claudia Zenteno Vázquez</h3>
                <p class="text-sm text-gray-300">Colaboradora</p>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<!-- Background GIF Container -->


<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Alianzas</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <!-- Academic Partners -->
            <div class="bg-gray-900/60 p-8 rounded-lg flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-cyan-500 group">
                <img src="{{ asset('images/logo_fcc.png') }}" alt="Facultad de Ciencias de la Computación BUAP" class="max-h-24 w-auto mb-4">
                <p class="text-sm text-gray-400 group-hover:text-cyan-400 transition-colors duration-300">Facultad de Ciencias de la Computación BUAP</p>
            </div>
            <!-- Certification Partners -->
            <div class="bg-gray-900/60 p-8 rounded-lg flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-cyan-500 group">
                <img src="{{ asset('images/ISACA.jpg') }}" alt="ISACA" class="max-h-24 w-auto mb-4">
                <p class="text-sm text-gray-400 group-hover:text-cyan-400 transition-colors duration-300">ISACA</p>
            </div>
            <!-- Industry Partners -->
            <div class="bg-gray-900/60 p-8 rounded-lg flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-cyan-500 group">
                <img src="{{ asset('images/Cisco.webp') }}" alt="Cisco" class="max-h-24 w-auto mb-4">
                <p class="text-sm text-gray-400 group-hover:text-cyan-400 transition-colors duration-300">Cisco Systems</p>
            </div>
        </div>
    </div>
</div>
@endsection
    