@php use Illuminate\Support\Facades\Vite; @endphp
<section class="satisfiedCustomers mt-5" id="collaborators">
    <div class="container">
        <h6 class="text-center">
            Gli utenti di Qr-Menù, ristoratori come te
        </h6>
        <h4 class="text-center">
            I nostri clienti soddisfatti
        </h4>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active d-column">
                    <img src="{{Vite::asset('resources/images/john.jpeg')}}" class="d-block w-25" alt="...">
                    <div class="carousel-caption d-none d-md-block mx-5">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{Vite::asset('resources/images/bob.jpeg')}}" class="d-block w-25" alt="...">
                    <div class="carousel-caption d-none d-md-block mx-5">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{Vite::asset('resources/images/jim.jpeg')}}" class="d-block w-25" alt="...">
                    <div class="carousel-caption d-none d-md-block mx-5">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
