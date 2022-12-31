import * as bootstrap from 'bootstrap'
import '../sass/app.scss';

// Needed to get assets after build : https://laravel.com/docs/9.x/vite#blade-processing-static-assets
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

const myCarouselElement = document.getElementById('carouselExampleCaptions')

// TODO: to be checked
const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 6000,
    wrap: true
})
