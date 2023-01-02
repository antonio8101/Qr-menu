@php use Illuminate\Support\Facades\Vite; @endphp
<section id="faq" class="faqSection mb-5">
    <div class="container">
        <h4 class="text-center mb-3">Le domande più frequenti</h4>
        <div class="row">
            <div class="app-image2 col-lg-6 d-none d-lg-block">
                <img src="{{Vite::asset('resources/images/phone-faq.png')}}" alt="app-mobile">
            </div>
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
