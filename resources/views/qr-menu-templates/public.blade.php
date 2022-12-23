@php use Illuminate\Support\Facades\Vite; @endphp

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
                            <svg id="app-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 501.93 673.09">
                                <g>
                                    <path d="m161.3,671.04h-16.53v-62.53c0-9.61-2.51-16.74-7.52-21.41-5.02-4.66-11.48-6.99-19.39-6.99s-14.98,2.33-20.35,6.99c-5.37,4.66-8.05,11.8-8.05,21.41v62.53h-16.32v-62.53c0-9.89-2.69-17.1-8.05-21.62-5.37-4.52-12.08-6.78-20.14-6.78-4.24,0-8.55.99-12.93,2.97-4.38,1.98-8.02,5.05-10.92,9.22-2.9,4.17-4.34,9.57-4.34,16.21v62.53H0v-105.98h16.74v10.81c3.53-3.95,7.77-6.92,12.72-8.9,4.94-1.98,10.1-3.04,15.47-3.18,6.92,0,13.74,1.38,20.45,4.13,6.71,2.76,12.33,7.1,16.85,13.04,3.82-5.79,9.04-10.07,15.68-12.82,6.64-2.76,13.57-4.13,20.77-4.13s14.48,1.73,20.98,5.19c6.5,3.46,11.73,8.51,15.68,15.15,3.95,6.64,5.93,14.7,5.93,24.16v62.53Z"/>
                                    <path d="m278.3,623.14h-82.45c.28,9.19,2.76,16.46,7.42,21.83,4.66,5.37,10.6,8.9,17.8,10.6,7.21,1.7,14.91,1.56,23.1-.42,8.19-1.98,15.97-5.72,23.31-11.23l8.9,13.14c-6.93,5.37-14.13,9.33-21.62,11.87-7.49,2.54-14.98,3.88-22.47,4.03-17.67.42-31.16-4.48-40.48-14.73-9.33-10.24-13.99-24.55-13.99-42.92,0-15.68,4.41-28.19,13.25-37.52,8.83-9.33,21.65-13.92,38.47-13.78,11.02,0,20.42,2.26,28.19,6.78,7.77,4.52,13.49,11.23,17.17,20.14,1.83,4.38,3,9.26,3.5,14.62.49,5.37.46,11.23-.11,17.59Zm-47.9-43.45c-9.61,0-17.77,2.51-24.48,7.52-6.71,5.02-10.07,12.47-10.07,22.36h67.4c0-9.33-2.93-16.64-8.8-21.94-5.87-5.3-13.88-7.95-24.06-7.95Z"/>
                                    <path d="m392.33,671.04h-16.74v-62.95c0-6.78-1.45-12.22-4.35-16.32-2.9-4.1-6.57-7.03-11.02-8.8-4.45-1.77-9.08-2.65-13.88-2.65s-9.29.99-13.88,2.97c-4.59,1.98-8.45,5.02-11.55,9.11-3.11,4.1-4.66,9.33-4.66,15.68v62.95h-16.74v-105.98h16.74v11.45c3.25-4.38,7.7-7.59,13.35-9.64,5.65-2.05,11.52-3.07,17.59-3.07,8.19,0,15.72,1.7,22.57,5.09,6.85,3.39,12.33,8.37,16.43,14.94,4.1,6.57,6.15,14.66,6.15,24.27v62.95Z"/>
                                    <path d="m485.16,594.46v31.35c0,6.98-1.52,12.71-4.56,17.19-3.04,4.48-6.78,7.78-11.23,9.9-4.45,2.13-8.87,3.19-13.25,3.19-8.76,0-15.93-2.43-21.51-7.29-5.58-4.86-8.37-12.52-8.37-22.99v-31.35h-16.96v31.35c0,7.89,1.17,14.88,3.5,20.95,2.33,6.07,5.62,11.08,9.86,15.03,4.1,3.95,9.11,6.87,15.05,8.77,5.94,1.9,12.01,2.73,18.23,2.5,6.22-.23,11.94-1.48,17.17-3.76,5.23-2.28,9.25-5.69,12.08-10.24v11.84h16.74v-76.43h-16.74Z"/>
                                    <rect x="409.54" y="564.97" width="92.37" height="19.37"/>
                                </g>
                                <g>
                                    <path d="m103.33,85v122h140v-122H103.33Zm112.5,93.5h-85v-65h85v65Z"/>
                                    <g>
                                        <rect x="342.75" y="332.41" width="63.55" height="21.18"/>
                                        <polygon points="391.34 228.99 391.34 245.19 345.86 245.19 345.86 228.99 272.97 228.99 272.97 353.59 310.97 353.59 310.97 283.81 342.75 283.81 342.75 312.47 406.29 312.47 406.29 228.99 391.34 228.99"/>
                                    </g>
                                    <path d="m368.86,85h-96.53v122h96.53c20.69,0,37.47-16.78,37.47-37.47v-47.06c0-20.69-16.78-37.47-37.47-37.47Zm14.47,66.78c0,14.48-11.74,26.22-26.22,26.22h-59.56v-65h59.56c14.48,0,26.22,11.74,26.22,26.22v12.56Z"/>
                                    <path d="m217.17,229h-87.67c-14.45,0-26.17,11.72-26.17,26.17v14.17c0,47.31,38.35,85.67,85.67,85.67h28.17c14.45,0,26.17-11.72,26.17-26.17v-73.67c0-14.45-11.72-26.17-26.17-26.17Zm-2.94,81.52c0,9.41-7.63,17.03-17.03,17.03h-8.09c-30.8,0-55.77-24.97-55.77-55.77h0c0-9.41,7.63-17.03,17.03-17.03h46.82c9.41,0,17.03,7.63,17.03,17.03v38.73Z"/>
                                    <g>
                                        <rect x="266.96" y="474.77" width="234.97" height="50.14"/>
                                        <path d="m.33,0v270.21c0,97.64,83.06,176.79,185.51,176.79h315.49V0H.33Zm459.63,400.45H182.09c-74.44,0-134.79-57.51-134.79-128.45V40.11h412.67v360.34Z"/>
                                    </g>
                                </g>
                            </svg>
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
