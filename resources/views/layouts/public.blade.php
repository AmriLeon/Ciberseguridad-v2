<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Ciberseguridad</title>
    <!-- Traemos el titulo de manera dinamica -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <style>
        .dynamic-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .dynamic-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background:  center/cover;
            opacity: 0.15;
        }

        .dynamic-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            opacity: 0.1;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .route-inicio .dynamic-bg { 
            background: linear-gradient(45deg, #0a192f, #172a45);
            animation: gradientBG 15s ease infinite;
        }
        .route-nosotros .dynamic-bg { 
            background: linear-gradient(45deg, #0f2027, #203a43);
            animation: gradientBG 15s ease infinite;
        }
        .route-contacto .dynamic-bg { 
            background: linear-gradient(45deg, #1a1f2c, #2c3e50);
            animation: gradientBG 15s ease infinite;
        }
        .route-noticias .dynamic-bg { 
            background: linear-gradient(45deg, #141e30, #243b55);
            animation: gradientBG 15s ease infinite;
        }
        .route-faq .dynamic-bg { 
            background: linear-gradient(45deg, #0f2027, #203a43);
            animation: gradientBG 15s ease infinite;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
    
            // Get current route name and add it as a class to body
            const path = window.location.pathname.split('/').pop() || 'inicio';
            document.body.classList.add('route-' + path);
        });

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
</head>
<body class="min-h-screen flex flex-col relative">
    <canvas id="neuralNetwork" class="dynamic-bg"></canvas>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('neuralNetwork');
            const ctx = canvas.getContext('2d');
            let width = canvas.width = window.innerWidth;
            let height = canvas.height = window.innerHeight;
            
            // Neural network nodes
            const nodes = [];
            const connections = [];
            const nodeCount = 200;
            const connectionRadius = 150;
            
            // Node class
            class Node {
                constructor(type) {
                    this.x = Math.random() * width;
                    this.y = Math.random() * height;
                    this.vx = (Math.random() - 0.5) * 0.5;
                    this.vy = (Math.random() - 0.5) * 0.5;
                    this.radius = 2.5;
                    this.type = type; // 'input', 'hidden', or 'output'
                }
                
                update() {
                    this.x += this.vx;
                    this.y += this.vy;
                    
                    if (this.x < 0 || this.x > width) this.vx *= -1;
                    if (this.y < 0 || this.y > height) this.vy *= -1;
                }
            }
            
            // Initialize nodes with different types
            const inputNodesCount = Math.floor(nodeCount * 0.3);
            const outputNodesCount = Math.floor(nodeCount * 0.3);
            const hiddenNodesCount = nodeCount - inputNodesCount - outputNodesCount;
            
            for (let i = 0; i < inputNodesCount; i++) {
                nodes.push(new Node('input'));
            }
            for (let i = 0; i < hiddenNodesCount; i++) {
                nodes.push(new Node('hidden'));
            }
            for (let i = 0; i < outputNodesCount; i++) {
                nodes.push(new Node('output'));
            }
            
            // Animation function
            function animate() {
                ctx.clearRect(0, 0, width, height);
                ctx.fillStyle = 'rgba(10, 25, 47, 0.1)';
                ctx.fillRect(0, 0, width, height);
                
                // Update and draw nodes with different colors
                nodes.forEach(node => {
                    node.update();
                    
                    ctx.beginPath();
                    ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
                    
                    // Set color based on node type with more cybersecurity-themed colors
                    switch(node.type) {
                        case 'input':
                            ctx.fillStyle = '#64ffda'; // Cyan for input nodes
                            break;
                        case 'output':
                            ctx.fillStyle = '#7f9cf5'; // Indigo for output nodes
                            break;
                        default:
                            ctx.fillStyle = '#8892b0'; // Slate for hidden nodes
                    }
                    ctx.fill();
                });
                
                // Draw connections
                ctx.strokeStyle = 'rgba(79, 195, 247, 0.15)';
                ctx.lineWidth = 0.5;
                
                for (let i = 0; i < nodes.length; i++) {
                    for (let j = i + 1; j < nodes.length; j++) {
                        const dx = nodes[i].x - nodes[j].x;
                        const dy = nodes[i].y - nodes[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);
                        
                        if (distance < connectionRadius) {
                            ctx.beginPath();
                            ctx.moveTo(nodes[i].x, nodes[i].y);
                            ctx.lineTo(nodes[j].x, nodes[j].y);
                            ctx.stroke();
                        }
                    }
                }
                
                requestAnimationFrame(animate);
            }
            
            // Handle window resize
            window.addEventListener('resize', () => {
                width = canvas.width = window.innerWidth;
                height = canvas.height = window.innerHeight;
            });
            
            // Start animation
            animate();
        });
    </script>
    <header class="relative z-20 bg-grey">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{ route('inicio') }}" class="-m-1.5 p-1.5 flex items-center space-x-2">
                    <i class="fas fa-shield-alt text-2xl text-blue-500"></i>
                    <span class="text-lg font-bold text-white">CiberSeguridad</span>
                </a>
            </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white" onclick="toggleMobileMenu()">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div id="mobileMenu" class="hidden fixed inset-0 z-50 lg:hidden">
          <div class="fixed inset-0 bg-black/30" onclick="toggleMobileMenu()"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="{{ route('inicio') }}" class="-m-1.5 p-1.5 flex items-center space-x-2">
                <i class="fas fa-shield-alt text-2xl text-blue-500"></i>
                <span class="text-lg font-bold text-white">CiberSeguridad</span>
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-white" onclick="toggleMobileMenu()">
                <span class="sr-only">Close menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  @foreach ([
                    'inicio' => ['Inicio','fas fa-home'],
                    'nosotros' => ['Nosotros', 'fas fa-users'],
                    'contacto' => ['Contacto', 'fas fa-envelope'],
                    'noticias' => ['Noticias', 'fas fa-newspaper'],
                    'faq'=> ['FAQ', 'fas fa-question-circle']
                  ] as $route => [$label, $icon])
                    <a href="{{ route($route) }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">
                      <i class="{{ $icon }}"></i>
                      {{$label}}
                    </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          @foreach (
          [
            'inicio' => ['Inicio','fas fa-home'],
            'nosotros' => ['Nosotros', 'fas fa-users'],
            'contacto' => ['Contacto', 'fas fa-envelope'],
            'noticias' => ['Noticias', 'fas fa-newspaper'],
            'faq'=> ['FAQ', 'fas fa-question-circle']
          ] as $route => [$label, $icon])
            <a href="{{ route($route) }}" class="text-sm/6 font-semibold text-white hover:text-blue-400 transition-colors">
              <i class="{{ $icon }}"></i>
              {{$label}}
            </a>
          @endforeach
        </div>
    </nav>
</header>

    <main class="flex-1 relative z-10 overflow-hidden">
        @yield('content')
    </main>

    <footer class="relative z-10 bg-gray-900 text-white py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Congress Information -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Congreso de Ciberseguridad</h3>
                    <p class="text-gray-400 text-sm">Únete a la comunidad líder en ciberseguridad y mantente actualizado con las últimas tendencias y amenazas digitales.</p>
                    <div class="mt-4">
                        <p class="text-gray-400 text-sm"><i class="fas fa-map-marker-alt mr-2"></i>Centro de Convenciones</p>
                        <p class="text-gray-400 text-sm"><i class="fas fa-calendar-alt mr-2"></i>15-17 Marzo, 2025</p>
                    </div>
                </div>
                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Síguenos</h3>
                    <div class="flex flex-col space-y-4">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors flex items-center"><i class="fab fa-twitter text-xl mr-2"></i>Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors flex items-center"><i class="fab fa-linkedin text-xl mr-2"></i>LinkedIn</a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors flex items-center"><i class="fab fa-github text-xl mr-2"></i>GitHub</a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors flex items-center"><i class="fab fa-youtube text-xl mr-2"></i>YouTube</a>
                    </div>
                </div>
                <!-- Legal & Privacy -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-blue-500 transition-colors">Términos y Condiciones</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition-colors">Política de Privacidad</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition-colors">Política de Cookies</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition-colors">Aviso Legal</a></li>
                    </ul>
                </div>
                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Mantente Informado</h3>
                    <form class="mb-4">
                        <div class="flex">
                            <input type="email" placeholder="Tu correo electrónico" class="flex-1 px-4 py-2 rounded-l-md bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                            <button type="submit" class="px-4 py-2 bg-cyan-600 text-white rounded-r-md hover:bg-blue-700 transition-colors">Suscribir</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>© 2025 Congreso Internacional de Ciberseguridad. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>