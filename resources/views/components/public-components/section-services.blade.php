@php use Illuminate\Support\Facades\Vite; @endphp
<section class="services mb-5" id="benefits">
    <div class="container ">
        <div class="services-item row d-flex justify-content-around">
            <div class="pc-image col-lg-5">
                <img src="{{Vite::asset('resources/images/pc-display-layout.png')}}" alt="pc-display">
            </div>
            <div class="restaurateur-benefits col-lg-5">
                <div class="d-flex align-items-center flex-column">
                    <h6>Semplice e intuitivo</h6>
                    <h4>I vantaggi per TE ristoratore</h4>
                    <div class="about">
                        <div class="text">
                            Risparmio e flessibilità al servizio del tuo locale:
                        </div>
                        <ul class="checked">
                            <li>
                                Personalizza il menu con il tuo logo e colori
                            </li>
                            <li>
                                Attiva e disattiva le portate ogni volta che vuoi
                            </li>
                            <li>
                                Metti in evidenza il piatto fresco del giorno
                            </li>
                            <li>
                                Crea i tuoi QR code da stampante in autonomia
                            </li>
                            <li>
                                Gestisci allergeni, anche in multilingua
                            </li>
                            <li>
                                Offri una soluzione igienica e sicura ai tuoi clienti
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="services-item row d-flex justify-content-around">
            <div class="customer-benefits col-lg-5">
                <div class="d-flex align-items-center flex-column">
                    <h6>Un'esperienza interattiva sicura</h6>
                    <h4>I vantaggi per il tuo cliente</h4>
                    <div class="about">
                        <div class="text">
                            Coinvolgi i tuoi clienti in una esperienza sicura, interattiva e senza eguali.
                        </div>
                        <ul class="checked">
                            <li>
                                Leggere il menu dal proprio cellulare o tablet.
                            </li>
                            <li>
                                Evita di utilizzare menù cartacei poco igienici
                            </li>
                            <li>
                                Pianifica il tuo pranzo prima di arrivare al ristorante
                            </li>
                            <li>
                                Ottieni informazioni extra, in completa autonomia
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-image col-lg-5">
                <img src="{{Vite::asset('resources/images/app-mobile.png')}}" alt="app-mobile">
            </div>
        </div>
    </div>
</section>
