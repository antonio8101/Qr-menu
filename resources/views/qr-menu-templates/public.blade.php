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
    <header>
        <div class="header-out">
            <div class="header-in">
                <nav class="navbar navbar-expand-md container-fluid">
                    <div class="container-fluid d-flex justify-content-around">
                        <a class="navbar-brand" href="#intro">
                            <img src="docs/src/lente.png" alt="...">
                        </a>
                        <div class="collapse navbar-collapse" id="#navbarTogglerDemo01">
                            <ul class="navbar-nav container-fluid d-flex justify-content-around">
                                <li class="nav-item">
                                    <a class="nav-link" href="#intro">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#features">How does it work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#benefits">
                                        Benefits
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pricing">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#faq">Faq</a>
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
    <section class="intro d-flex" id="intro">
        <div class="content-box m-3 m-md-5 col-lg-8 text-left">
            <h1>Crea il tuo <br> menù digitale <br> in pochi passaggi</h1>
            <div>
                Passa al menu digitale e aumenta i clienti<br>del tuo locale grazie alla tecnologia QR Code.
            </div>
            <button type="button" class="btn btn-outline-light">Provalo gratuitamente</button>
            <button type="button" class="btn btn-outline-light">Scopri di più</button>
        </div>
        <div class="mobileImage justify-content-center align-items-center">
            <img src="docs/src/iltuoristorante.svg" alt="...">
        </div>
    </section>
    <section class="features d-flex justify-content-center mt-5 mb-5" id="features">
        <div class="features-container">
            <div class="features-explain">
                <div class="text-center">
                    <h6>Come funziona</h6>
                </div>
                <div>
                    <h4 class="text-center">Perchè Qr-Menù?</h4>
                </div>
            </div>
            <div class="container">
                <div class="features d-flex justify-content-around row">
                    <div class="feature-item border border-warning text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>Crea il tuo menù</h6>
                        <div class="feature-text">
                            Crea in pochi e semplici passaggi il tuo Menu digitale, personalizzato e multilingue.
                            Non hai tempo?
                            Lo creiamo noi per te!
                        </div>
                    </div>
                    <div class="feature-item border border-warning text-center my-3 col-lg-3 col-md-5 col-sm-10">
                        <h6>Personalizza</h6>
                        <div class="feature-text">
                            Organizza i servizi in base alle tue necessità, ricevi in loco gli adesivi QR e personalizza
                            l'esperienza del tuo cliente.
                        </div>
                    </div>
                    <div class="feature-item border border-warning text-center my-3 col-lg-3 col-md-5 col-sm-10">
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
    <section class="services mb-5" id="benefits">
        <div class="container ">
            <div class="services-item row d-flex justify-content-around">
                <div class="empty-div col-lg-5"></div>
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
                <div class="empty-div col-lg-5"></div>
            </div>
        </div>
    </section>
    <section id="pricing">
        <div class="plans-container mb-5">
            <div class="plans-explain">
                <div class="text-center">
                    <h6>Un'unica piattaforma per rispondere a ogni tua esigenza></h6>
                </div>
                <div>
                    <h4 class="text-center">Scegli il piano perfetto per te</h4>
                </div>
            </div>
            <div class="container">
                <div class="plans d-flex justify-content-around row">
                    <div class="plans-item border border-warning text-center my-3 col-lg-3 col-md-5 col-sm-10">
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
                    <div class="plans-item border border-warning text-center my-3 col-lg-3 col-md-5 col-sm-10">
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
                    <div class="plans-item border border-warning text-center my-3 col-lg-3 col-md-5 col-sm-10">
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
    <section id="faq" class="faqSection mb-5">
        <div class="container">
            <h4 class="text-center mb-3">Le domande più frequenti</h4>
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 d-flex align-items-center flex-column">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Che cos'è Qr-Menù?
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Qr-Menù è il servizio che permette a chi lavora nel settore ho.re.ca. di fornire
                                        uno strumento facile, gratuito e sicuro per i propri clienti.
                                        <br>
                                        Con Qr-Menù puoi gestire più menù, in diverse lingue e in completa autonomia.
                                        <a href="#pricing">Scopri tutte le caratteristiche</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    A chi è rivolto il servizio?
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Qr-Menù risponde alla necessità di diversi tipi di attività: dal ristorante
                                        tradizionale, al pub, all'agriturismo fino allo street-food.
                                        <a href="#collaborators">Scopri chi ha trovato in Qr-Menù un valido
                                            collaboratore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Il cliente deve installare un'App sul proprio smartphone?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Assolutamente no; CartaNo è un servizio completamente web based; questo vuol
                                        dire che basta una connessione a internet per utilizzarlo. Raggiungi i tuoi
                                        clienti ancor prima che loro mettano piede nel tuo ristorante!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    I miei clienti non riescono a scansionare il QR Code.
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Gli smartphone di ultima generazione scansionano i QR Code direttamente con
                                        l'app Fotocamera. Se il tuo cliente avesse problemi, è possibile scaricare
                                        gratuitamente l'app Google Lens per <a
                                            href="https://play.google.com/store/apps/details?id=com.google.ar.lens">Android</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    Quanto dura il servizio gratuito?
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        CartaNo ti permette di accedere alle funzionalità Advanced per 30 giorni entro i
                                        quali sei libero di usare tutte le funzioni come meglio preferisci.
                                        Terminato il periodo di prova puoi scegliere se continuare a usare il servizio
                                        in modalità Free per tutto il tempo che vuoi o scegliere il pacchetto più adatto
                                        alle tue esigenze
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Come gestisco gli allergeni nei miei piatti?
                                </button>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Comunicare gli allergeni ai clienti è un obbligo di legge. Con CartaNo è
                                        possibile per ogni piatto associare gli eventuali allergeni presenti, che
                                        verranno presentati tramite icone a fianco del nome della pietanza. Semplice,
                                        no?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                    Mi serve stampare dei Qr Code da applicare ai tavoli?
                                </button>
                            </div>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Con i servizi Base e Adavanced, a questo ci pensiamo noi: riceverai un kit di QR
                                        Code adesivi e resistenti all'usura e pulizia da applicare ai tavoli.
                                        Vuoi stamparli in autonomia? Anche con il servizio Free avrai sempre la
                                        possibilità di stampare tutti i codici di cui hai bisogno
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                    Ho bisogno di stampare i menu per la mia bacheca
                                </button>
                            </div>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        CartaNo ti permette di stampare i tuoi menù in formato A4 e A5 con diversi stili
                                        grafici per personalizzarli all'immagine della tua attività
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                    Hai un Coupon da riscattare?
                                </button>
                            </div>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Entrando nell'area riservata, alla voce del menù "il mio piano" troverai la
                                        sezione dove inserire il coupon da riscattare. Se non sei ancora registrato,
                                        registrati e successivamente potrai usufruire del coupon che hai ricevuto
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Ho ancora delle domande. Come posso contattarvi?
                                </button>
                            </div>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        Siamo disponibili a rispondere a qualsiasi tua domanda. Apri la chat nell'angolo
                                        in basso a destra e un nostro operatore ti risponderà nel minor tempo possibile
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <div class="carousel-item active">
                        <img src="../../../docs/src/placeholder900x600.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../../docs/src/placeholder900x600.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="docs/src/placeholder900x600.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
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
    <footer>
        <div class="container">
            <div class="footerHeaders row">
                <h6 class="text-center col-4 col-xs-5">
                    Servizi
                </h6>
                <h6 class="text-center col-4 col-xs-5">
                    Assistenza
                </h6>
            </div>
            <div class="support row d-flex">
                <ul class="col-4 text-center col-xs-5">
                    <li>
                        <a href="#intro">Home</a>
                    </li>
                    <li>
                        <a href="#features">Come funziona</a>
                    </li>
                    <li>
                        <a href="#benefits">Vantaggi</a>
                    </li>
                    <li>
                        <a href="#pricing">Prezzi</a>
                    </li>
                    <li>
                        <a href="#faq">Faq</a>
                    </li>
                </ul>
                <div class="col-4 text-center col">
                    Email: <a href="">info@qrmenu.it</a>
                </div>
                <div class="col-4 col-xs-6">
                    <ul>
                        <li>
                            <a href="">Privacy policy</a>
                        </li>
                        <li>
                            <a href="">Cookie policy</a>
                        </li>
                        <li>
                            <a href="">Termini di servizio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
