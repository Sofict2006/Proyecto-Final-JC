const hola = document.querySelector('.hola');
const enlaces = document.querySelector('.enlaces_menu');
const barras = document.querySelectorAll('.hola span');

hola.addEventListener('click', () => {
    enlaces.classList.toggle('activado');
    barras.forEach(child => {child.classList.toggle('animado')});
    
});
