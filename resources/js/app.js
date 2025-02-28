import './bootstrap';
import Aos from 'aos';
import 'aos/dist/aos.css';

Aos.init({
    duration: 800,
    delay: 200,
    once: true
});

import Typed from 'typed.js';
document.addEventListener('DOMContentLoaded',()=>{
    const typedTitle = new Typed('#typed-title', {
        strings: ['Bienvenidos ', 'Todavia no se que poner', 'Helado'],
        // Manda a traer una cadena de caracteres 
        typeSpeed: 100,
        // Velocidad de escritura
        backSpeed: 50, 
        // Velocidad de borrado
        showCursor: true,
        // Mostrar cursor
        loop: true
        // Repetir el efecto
    });

})


