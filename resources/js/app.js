import './bootstrap';
import '../sass/app.scss';

// Needed to get assets after build : https://laravel.com/docs/9.x/vite#blade-processing-static-assets
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const myCarouselElement = document.getElementById('carouselExampleCaptions')

// TODO: to be checked
const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 6000,
    wrap: true
})
