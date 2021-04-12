<x-layout>

    <nav class="navbar position-fixed navbar-expand-lg  custom-navbar  align-items-center">


        @if (session('message'))
        <div class="col-12 container-fluid center z-index mb-5 alert bg-dark alert-success">
             <h2 class="display-5 text-light">
                Abbiamo ricevuto la sua email per rifarsi i denti gialli che si ritrova, ora  
                La invito a refreshare</h2>
                <a href="{{route('homepage')}}" class="col-3 p-3 btn btn-primary">REFRESH HOMEPAGE</a>

        </div>
    @endif

        <div class="container-fluid">
            <div class="d flex  ">
                <a class="navbar-brand" href={{route('homepage')}}>DentNET</a>
                <p class="custom-info-navbar">STUDI DENTISTICI</p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row" id="navbarNavAltMarkup">

                <div class="m-3 navbar-nav ">
                    <a class="col-1 custom-info-navbar nav-link" href="{{route('staff')}}">STAFF</a>
                    <a class="col-1 custom-info-navbar nav-link" href="{{route('sceglierci')}}">PERCHE' SCEGLIERCI</a>
                    <a class="col-1 custom-info-navbar nav-link" href="{{route('dovesiamo')}}">DOVE SIAMO</a>
                    <a class="col-1 custom-info-navbar nav-link" href="{{route('contatti')}}">CONTATTI</a>
                    <a class="ms-5 p-1 btn btn-primary col-2 custom-info-navbar" href="{{route('primoapp')}}">PRENOTA VISITA</a>
                </div>
            </div>
        </div>
    </nav>




    <div class="container-fluid center custom-header img mb-5">
        <div class="row  justify-content-center">
            <div class="pt-5  col-8 col-md-6">
                <h2>Dent<span class=" article-color">Net®</span> è l’allineatore invisibile senza fili né attacchi in
                    metallo</h2>
                <p class="mt-3 custom-info">CI PRENDIAMO CURA DI TE CON TRATTAMENTI PERSONALIZZATI</p>
                <a class="custom-info-button btn btn-primary" href="">Scopri di più</a>
            </div>
            <div class="col-md-4 m-5">
            </div>
        </div>
    </div>

    <article>
        <div class="container col-10 mb-5 col-md-12">
            <h2 class="article-color">Trova la prestazione che fa per te</h2>
            <p class="article-color mt-3 custom-info">I NOSTRI STUDI DENTISTICI SONO A VICENZA, FERRARA E CENTO</p>
        </div>
    </article>

    <section>
        <div class="container">
            <div class="row">
                <div class="img-section col-md-6 col-12">
                    <img class=" img-fluid"
                        src="https://www.matteofrozzi.it/wp-content/uploads/2015/05/studio-dentistico-frozzi-cento.jpg"
                        alt="">
                </div>
                <div class="bg-primary custom-section col-md-6 col-12">
                    <h2 class="mt-5">Rendi i denti più puliti</h2>
                    <p class="mt-5">La bellezza di un sorriso sano comincia dalla prevenzione:
                        solo così puoi evitare il formarsi della placca e del tartaro,
                        scongiurando l’insorgere di carie, gengiviti e piorrea.</p>
                    <a class="mt-5 custom-info-button btn btn-primary" href="">Scopri di più</a>

                </div>
                <div class="bg-custom-section custom-section col-md-6 col-12">
                    <h2 class="mt-5">Fai splendere il tuo sorriso</h2>
                    <p class="mt-5">Alcune sostanze come caffè, tè, vino rosso e fumo di sigaretta possono macchiare i
                        tuoi denti,
                        compromettendo il loro colore naturale.
                        Le tecniche di sbiancamento eseguite negli Studi Dentistici Dr. Frozzi
                        migliorano la tonalità originale e la lucentezza della tua dentatura.</p>
                    <a class="mt-5 custom-info-button btn bg-primary btn-primary" href="">Scopri di più</a>
                </div>
                <div class="img-section col-md-6 col-12">
                    <img class="img-fluid"
                        src="https://www.matteofrozzi.it/wp-content/uploads/2015/05/studio-dentistico-frozzi-vicenza1.jpg"
                        alt="">
                </div>
                <div class="img-section col-md-6 col-12">
                    <img class=" img-fluid"
                        src="https://www.matteofrozzi.it/wp-content/uploads/2015/05/studio-dentistico-frozzi-cento.jpg"
                        alt="">
                </div>
                <div class="bg-primary custom-section col-md-6 col-12">
                    <h2 class="mt-5">Un nuovo volto al tuo sorriso</h2>
                    <p class="mt-5">Il sorriso racconta molto di te, del tuo carattere e del modo con cui affronti la
                        vita; per questo è importante averne cura.
                        I professionisti degli Studi Dentistici Dr.
                        Frozzi partono da una presa in carico globale del paziente, considerando anche le componenti
                        extradentali – in particolare labbra e gengive – che concorrono a definire ogni fisionomia.
                        Inoltre eseguiamo interventi di chirurgia maxillo facciale e orbito palpebrale direttamente in
                        studio.</p>
                    <a class="mt-5 custom-info-button btn btn-primary" href="">Scopri di più</a>

                </div>
            </div>
        </div>
    </section>









    <x-footer />

</x-layout>
