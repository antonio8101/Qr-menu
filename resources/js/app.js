import * as bootstrap from 'bootstrap'
import '../sass/app.scss';

const myCarouselElement = document.getElementById('carouselExampleCaptions')
const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 6000,
    wrap: true
})
