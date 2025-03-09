@extends ('layouts.public')

@section('titulo','contacto')

@section('content')
<div class="bg-gray-800/80 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Contáctanos</h2>
            <p class="mt-4 text-lg text-gray-400">Estamos aquí para responder tus preguntas sobre el congreso</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300">Nombre completo</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-300">Teléfono</label>
                        <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300">Correo electrónico</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="inquiry_type" class="block text-sm font-medium text-gray-300">Tipo de consulta</label>
                        <select id="inquiry_type" name="inquiry_type" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="general">Información general</option>
                            <option value="registration">Registro al congreso</option>
                            <option value="speaker">Contacto con ponentes</option>
                            <option value="sponsorship">Patrocinios</option>
                            <option value="other">Otros</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300">Descripción de la consulta</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#571188] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Enviar mensaje</button>
                    </div>
                </form>
            </div>

            <!-- Location Information -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-white mb-4">Ubicación</h3>
                    <div class="aspect-w-16 aspect-h-9 mb-4">
                        <iframe class="w-full h-64 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.32966909322!2d-98.20699362543706!3d19.005189454192962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf58ad2399d1%3A0xb517171394a5208b!2sFacultad%20de%20Ciencias%20de%20la%20Computaci%C3%B3n%20-%20BUAP!5e0!3m2!1ses-419!2smx!4v1740863760011!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="text-gray-300 space-y-2">
                        <p><i class="fas fa-map-marker-alt text-[#571188] mr-2"></i> 104-B, Avenida San Claudio, Blvrd 14 Sur, Cdad. Universitaria, 72592 Heroica Puebla de Zaragoza, Pue.</p>
                        <p><i class="fas fa-phone text-[#571188] mr-2"></i> +52 (999) 123-4567</p>
                        <p><i class="fas fa-envelope text-[#571188] mr-2"></i> congreso@ciberseguridad.com</p>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Horario de atención</h3>
                    <div class="text-gray-300 space-y-2">
                        <p><span class="font-medium">Lunes a Viernes:</span> 9:00 AM - 6:00 PM</p>
                        <p><span class="font-medium">Sábado:</span> 9:00 AM - 2:00 PM</p>
                        <p><span class="font-medium">Domingo:</span> Cerrado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
