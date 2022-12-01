<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Qr-Menù
    </title>
    @vite(['resources/js/app.js'])
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div class="page-wrapper">
    <!-- ======= Header ======= -->
    <header>
        <div class="header-out">
            <div class="header-in">
                <nav class="navbar navbar-expand-md container-fluid">
                    <div class="container-fluid d-flex justify-content-around">
                        <a class="navbar-brand" href="#">Qr-Menù</a>
                        <div class="collapse navbar-collapse" id="#navbarTogglerDemo01">
                            <ul class="navbar-nav container-fluid d-flex justify-content-around">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">How does it work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Benefits
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Faq</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Contacts</a>
                                </li>
                                <li class="nav-item select d-flex align-items-center justify-content-center">
                                    <select class="lang-select" aria-label="Default select example">
                                        <option value="1">ITA</option>
                                        <option value="2">ENG</option>
                                        <option value="3">ESP</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <button type="button" class="btn btn-outline-light">Login</button>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="intro">
        <div class="content-box m-3 m-md-5 col-lg-8 text-left">
            <h1>Crea il tuo <br> menù digitale <br> in pochi passaggi</h1>
            <div>
                Passa al menu digitale e aumenta i clienti<br>del tuo locale grazie alla tecnologia QR Code.
            </div>
            <button type="button" class="btn btn-outline-light">Provalo gratuitamente</button>
            <button type="button" class="btn btn-outline-light">Scopri di più</button>
        </div>
    </section>
    <section class="features d-flex justify-content-center">
        <div class="features-container">
            <div class="features-explain">
                <div class="text-center">
                    <span>Come funziona</span>
                </div>
                <div>
                    <h4 class="text-center">Perchè Qr-Menù?</h4>
                </div>
            </div>
            <div class="container">
                <div class="features d-flex justify-content-around row">
                    <div class="feature-item border border-white text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>Crea il tuo menù</h6>
                        <div class="feature-text">
                            Crea in pochi e semplici passaggi il tuo Menu digitale, personalizzato e multilingue.
                            Non hai tempo?
                            Lo creiamo noi per te!
                        </div>
                    </div>
                    <div class="feature-item border border-white text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>Personalizza</h6>
                        <div class="feature-text">
                            Organizza i servizi in base alle tue necessità, ricevi in loco gli adesivi QR e personalizza
                            l'esperienza del tuo cliente.
                        </div>
                    </div>
                    <div class="feature-item border border-white text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>Scansiona e ordina</h6>
                        <div class="feature-text">
                            Nessuna applicazione da scaricare, basta una foto al QR code per visualizzare il Menu e
                            permettere ai tuoi clienti di ordinare.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services-item row d-flex justify-content-around">
                <div class="empty-div col-5"></div>
                <div class="restaurateur-benefits col-5">
                    <h6>Semplice e intuitivo</h6>
                    <h4>I vantaggi per TE ristoratore</h4>
                    <div class="about">
                        <div class="text">
                            Risparmio e flessibilità al servizio del tuo locale:
                        </div>
                        <ul>
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
        <div class="container">
            <div class="services-item row d-flex justify-content-around">
                <div class="customer-benefits col-5">
                    <h6>Un'esperienza interattiva sicura</h6>
                    <h4>I vantaggi per il tuo cliente</h4>
                    <div class="about">
                        <div class="text">
                            Coinvolgi i tuoi clienti in una esperienza sicura, interattiva e senza eguali.
                        </div>
                        <ul>
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
                <div class="empty-div col-5"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="plans-container">
            <div class="plans-explain">
                <div class="text-center">
                    <span>Un'unica piattaforma per rispondere a ogni tua esigenza</span>
                </div>
                <div>
                    <h4 class="text-center">Scegli il piano perfetto per te</h4>
                </div>
            </div>
            <div class="container">
                <div class="plans d-flex justify-content-around row">
                    <div class="plans-item border border-white text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>FREE</h6>
                        <h4>Gratis</h4>
                        <ul class="plan-text">
                            <li>
                                Categorie e Voci Menu Personalizzabili
                            </li>
                            <li>
                                Stampa QR Code
                            </li>
                            <li>
                                Share via Social
                            </li>
                            <li>
                                Caricamento Logo
                            </li>
                            <li>
                                Caratteristiche Piatti
                            </li>
                            <li>
                                500 Visualizzazioni/Mese
                            </li>
                            <li>
                                Più prezzi per Prodotto
                            </li>
                            <li>
                                Annunci pubblicitari
                            </li>
                            <li class="nd">
                                Template Menu e colori Personalizzati
                            </li>
                            <li class="nd">
                                Gestione Intolleranze
                            </li>
                            <li class="nd">
                                Invio Adesivi QR Code
                            </li>
                            <li class="nd">
                                Gestione Multi Menu
                            </li>
                            <li class="nd">
                                Inserimento Menu da Operatore
                            </li>
                            <li class="nd">
                                Stampa Menu Cartaceo
                            </li>
                            <li class="nd">
                                Pianificazione Oraria Menu
                            </li>
                            <li class="nd">
                                Multilingua
                            </li>
                            <li class="nd">
                                Statistiche Accessi
                            </li>
                            <li class="nd">
                                Supporto Tecnico
                            </li>
                        </ul>
                        <button type="button" class="btn btn-outline-light mb-2">INIZIA SUBITO</button>
                    </div>
                    <div class="plans-item border border-white text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>BASE</h6>
                        <h4>4,99€</h4>
                        <ul class="plan-text">
                            <li>
                                Categorie e Voci Menu Personalizzabili
                            </li>
                            <li>
                                Stampa QR Code
                            </li>
                            <li>
                                Share via Social
                            </li>
                            <li>
                                Caricamento Logo
                            </li>
                            <li>
                                Caratteristiche Piatti
                            </li>
                            <li>
                                500 Visualizzazioni/Mese
                            </li>
                            <li>
                                Più prezzi per Prodotto
                            </li>
                            <li>
                                Annunci pubblicitari
                            </li>
                            <li>
                                Template Menu e colori Personalizzati
                            </li>
                            <li>
                                Gestione Intolleranze
                            </li>
                            <li>
                                Invio Adesivi QR Code
                            </li>
                            <li>
                                Gestione Multi Menu
                            </li>
                            <li class="nd">
                                Inserimento Menu da Operatore
                            </li>
                            <li class="nd">
                                Stampa Menu Cartaceo
                            </li>
                            <li class="nd">
                                Pianificazione Oraria Menu
                            </li>
                            <li class="nd">
                                Multilingua
                            </li>
                            <li class="nd">
                                Statistiche Accessi
                            </li>
                            <li class="nd">
                                Supporto Tecnico
                            </li>
                        </ul>
                        <button type="button" class="btn btn-outline-light mb-2">INIZIA SUBITO</button>
                    </div>
                    <div class="plans-item border border-white text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>ADVANCED</h6>
                        <h4>10,99€</h4>
                        <ul class="plan-text">
                            <li>
                                Categorie e Voci Menu Personalizzabili
                            </li>
                            <li>
                                Stampa QR Code
                            </li>
                            <li>
                                Share via Social
                            </li>
                            <li>
                                Caricamento Logo
                            </li>
                            <li>
                                Caratteristiche Piatti
                            </li>
                            <li>
                                500 Visualizzazioni/Mese
                            </li>
                            <li>
                                Più prezzi per Prodotto
                            </li>
                            <li>
                                Annunci pubblicitari
                            </li>
                            <li>
                                Template Menu e colori Personalizzati
                            </li>
                            <li>
                                Gestione Intolleranze
                            </li>
                            <li>
                                Invio Adesivi QR Code
                            </li>
                            <li>
                                Gestione Multi Menu
                            </li>
                            <li>
                                Inserimento Menu da Operatore
                            </li>
                            <li>
                                Stampa Menu Cartaceo
                            </li>
                            <li>
                                Pianificazione Oraria Menu
                            </li>
                            <li>
                                Multilingua
                            </li>
                            <li>
                                Statistiche Accessi
                            </li>
                            <li>
                                Supporto Tecnico
                            </li>
                        </ul>
                        <button type="button" class="btn btn-outline-light mb-2">INIZIA SUBITO</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
