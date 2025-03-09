import './bootstrap';
import Aos from 'aos';
import 'aos/dist/aos.css';
import Typed from 'typed.js';

Aos.init({
    duration: 800,
    delay: 200,
    once: true
});

document.addEventListener('DOMContentLoaded',()=>{
    const typedTitle = new Typed('#typed-title', {
        strings: [
            '<span class="text-blue-500">Congreso Nacional de Ciberseguridad 2025</span>',
            '<span class="text-cyan-400">Desafíos y tendencias en ciberseguridad</span>',
            '<span class="text-[#73E0B7]">Conocimiento, tecnología y prevención</span>'
        ],
        typeSpeed: 100,
        backSpeed: 50,
        showCursor: true,
        loop: true,
        cursorChar: '|',
        fadeOut: true,
        html: true
    });
});