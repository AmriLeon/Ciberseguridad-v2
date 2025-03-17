@extends ('layouts.public')

@section('titulo','faq')

@section('content')

<div class="bg-gray-800/80 bg-opacity-50 relative z-10 py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-extrabold text-white text-center mb-16 animate-fade-in-up">Preguntas Frecuentes</h1>
    
    <!-- Registration & Tickets Section -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 mb-4"><i class="fas fa-ticket-alt mr-3"></i>Registro y Boletos</h2>
        <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Cómo puedo registrarme para el congreso?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Puede registrarse a través de nuestra plataforma en línea. El proceso es simple: seleccione el tipo de entrada, complete el formulario de registro y realice el pago correspondiente.
                </div>
            </div>

            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Cuál es el costo de la entrada?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Ofrecemos diferentes tipos de entradas:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Entrada General: $1,500 MXN</li>
                        <li>Entrada VIP: $2,500 MXN</li>
                        <li>Estudiantes (con credencial vigente): $800 MXN</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Information Section -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 mb-4"><i class="fas fa-calendar-alt mr-3"></i>Información del Evento</h2>
        <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Cuándo y dónde se realizará el congreso?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    El Congreso Nacional de Ciberseguridad 2025 se llevará a cabo del 15 al 17 de marzo de 2025 en el Centro de Convenciones de Mérida, Yucatán.
                </div>
            </div>

            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Qué incluye mi entrada?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Su entrada incluye:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Acceso a todas las conferencias y talleres</li>
                        <li>Material del congreso</li>
                        <li>Certificado de participación</li>
                        <li>Coffee breaks y comidas durante el evento</li>
                    </ul>
                </div>
            </div>
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Habrá oportunidades de networking?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Sí, el congreso incluye múltiples espacios de networking:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Sesiones de networking estructuradas</li>
                        <li>Cóctel de bienvenida</li>
                        <li>Espacios de café extendidos</li>
                        <li>Cena de gala para entradas VIP</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Technical Requirements Section -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 mb-4"><i class="fas fa-laptop-code mr-3"></i>Requisitos Técnicos</h2>
        <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Qué debo traer a los talleres prácticos?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Para los talleres prácticos, necesitará:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Laptop con mínimo 8GB de RAM</li>
                        <li>Sistema operativo Windows 10/11 o Linux</li>
                        <li>Espacio libre en disco de 20GB</li>
                        <li>Software específico (se enviará lista por correo)</li>
                    </ul>
                </div>
            </div>

            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Qué software necesito tener instalado?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Para aprovechar al máximo los talleres, recomendamos tener instalado:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Máquina virtual (VirtualBox o VMware)</li>
                        <li>Kali Linux (última versión estable)</li>
                        <li>Visual Studio Code o similar</li>
                        <li>Docker Desktop</li>
                        <li>Navegadores actualizados (Chrome, Firefox)</li>
                    </ul>
                    <p class="mt-2">Se enviará una guía detallada de instalación dos semanas antes del evento.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Nuestros Servicios -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 mb-4"><i class="fas fa-cogs mr-3"></i>Nuestros Servicios</h2>
        <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Qué servicios de ciberseguridad ofrecen?</span>
                    <i class="fas fa-chevron-down text-blue-500 group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                Ofrecemos una amplia gama de servicios que incluyen:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Pruebas de penetración</li>
                        <li>Auditorías de seguridad</li>
                        <li>Consultoría en seguridad</li>
                        <li>Protección contra malware</li>
                        <li>Evaluación de vulnerabilidades</li>
                        <li>Capacitación en ciberseguridad para empleados</li>
                    </ul>
                </div>
            </div>

            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Cómo puedo contratar sus servicios?</span>
                    <i class="fas fa-chevron-down text-[#5AB693] group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                Puede contactarnos a través de nuestro:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Formulario en línea</li>
                        <li>Correo electrónico</li>
                        <li>Teléfono</li>
                    </ul>
                    <p class="mt-2">Realizaremos una evaluación inicial gratuita para determinar sus necesidades específicas y proponer la mejor solución.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seguridad Técnica -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 mb-4"><i class="fas fa-shield mr-3"></i>Seguridad Técnica</h2>
        <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Qué es una auditoría de seguridad?</span>
                    <i class="fas fa-chevron-down text-[#5AB693] group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Una auditoría de seguridad es una evaluación exhaustiva de los sistemas de información para:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Identificar vulnerabilidades</li>
                        <li>Evaluar la efectividad de las medidas de seguridad actuales</li>
                        <li>Proponer mejoras para fortalecer la postura de seguridad</li>
                    </ul>
                </div>
            </div>

            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Cómo protegen mis datos?</span>
                    <i class="fas fa-chevron-down text-[#5AB693] group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                    Implementamos múltiples capas de seguridad, incluyendo:
                    <ul class="list-disc ml-6 mt-2">
                        <li>Encriptación de datos</li>
                        <li>Firewalls avanzados</li>
                        <li>Monitoreo continuo</li>
                        <li>Copias de seguridad regulares</li>
                    </ul>
                    <p class="mt-2">Realizaremos una evaluación inicial gratuita para determinar sus necesidades específicas y proponer la mejor solución.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Soporte y Mantenimiento -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-blue-500 mb-4"><i class="fas fa-headset mr-3"></i>Soporte y Mantenimiento</h2>
        <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Ofrecen soporte 24/7?</span>
                    <i class="fas fa-chevron-down text-[#5AB693] group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                Sí, contamos con un equipo de soporte técnico disponible las 24 horas del día, los 7 días de la semana, para atender cualquier incidente de seguridad o consulta urgente.
                </div>
            </div>

            <div class="border border-gray-700 rounded-lg hover:border-blue-500 transition-colors duration-300 shadow-lg hover:shadow-blue-500/20 bg-gray-800 bg-opacity-60 backdrop-blur-sm hover:bg-opacity-70">
                <button class="w-full px-6 py-4 text-left text-white hover:bg-gray-800/50 transition-all duration-300 flex justify-between items-center group">
                    <span>¿Con qué frecuencia realizan actualizaciones de seguridad?</span>
                    <i class="fas fa-chevron-down text-[#5AB693] group-hover:text-blue-400 transition-transform duration-300"></i>
                </button>
                <div class="px-6 py-4 text-gray-300 border-t border-gray-700 bg-gray-800/20">
                Realizamos actualizaciones de seguridad de manera continua y programada. Las actualizaciones críticas se implementan inmediatamente, mientras que las actualizaciones regulares se programan mensualmente o según las necesidades específicas.
                </div>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            // Toggle content visibility
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});
</script>

<style>
.border-gray-700 button + div {
    max-height: 0;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
}

.border-gray-700 button + div[style*="max-height"] {
    opacity: 1;
}

.fas {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.group:hover .fas {
    color: #60A5FA;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 1.5s ease-out forwards;
}
</style>
@endsection