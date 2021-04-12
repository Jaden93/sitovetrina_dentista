<x-layout>

    <x-navbar />
    <header>
        <div class="container-fluid center custom-header bg-light mb-5">
            <div class="container w-75">
                <div class="row">
                    <div class="pt-5 col-md-6 col-12">
                        <h2 class="section-font article-color">Rivolgiti allo studio più vicino a te</h2>
                        <p class="article-color mt-3 custom-info">VICENZA, CENTO E FERRARA</p>

                    </div>
                </div>
            </div>
        </div>
    </header>




    <section>
        <div class="container">
            <div class="row">

                @forEach ($luogo as $el)


                @if ($el['sede'] == 'Studio di Cento')
              
            <div class="bg-color-blue custom-section col-md-6 mb-4 col-12">
                <h2 class="">{{$el['sede']}}</h2>
                <p class="">{{$el['via']}}</p>
                <div class="due-colonne">
                    <p> <span class="font-sec-color">Orario</span><br>
                        {{$el['giorni']}} <br>
                        {{$el['orario']}} </p>
                    <p><span class="font-sec-color">T</span><br>
                        {{$el['tel']}}</p>
                </div>

                <a class="mt-5 custom-info-button btn btn-primary" href="">CONTATTA LO STUDIO</a>
                <a class="mt-2 custom-info-button btn btn-primary" href="">COME ARRIVARE</a>
            </div>
            <div class="img-section  col-md-6 mb-4 col-12">
                <img class="img-fluid img-map" src="https://www.matteofrozzi.it/wp-content/uploads/2020/11/vicenza.jpg"
                    alt="">
            </div>   
                @else
                    <div class="img-section  col-md-6 mb-4 col-12">
                        <img class="img-fluid img-map" src="https://www.matteofrozzi.it/wp-content/uploads/2020/11/vicenza.jpg"
                            alt="">
                    </div>
                <div class="bg-color-blue custom-section col-md-6 mb-4 col-12">
                    <h2 class="">{{$el['sede']}}</h2>
                    <p class="">{{$el['via']}}</p>
                    <div class="due-colonne">
                        <p> <span class="font-sec-color">Orario</span><br>
                            {{$el['giorni']}} <br>
                            {{$el['orario']}} </p>
                        <p><span class="font-sec-color">T</span><br>
                            {{$el['tel']}}</p>
                    </div>

                    <a class="mt-5 custom-info-button btn btn-primary" href="">CONTATTA LO STUDIO</a>
                    <a class="mt-2 custom-info-button btn btn-primary" href="">COME ARRIVARE</a>
                </div>
                @endif
                @endForEach
            </div>
        </div>
    </section>




    <section>
        <div class="position-relative container-fluid center custom-header img-staff bg-light mb-5">
            <div class="daje container w-75">
                <div class="row">
                    <div class="pt-5 col-md-6 col-12">
                        <h2 class="section-font article-color">Incontra lo staff</h2>
                        <p class="article-color mt-3 ">Gli Studi Dentistici Dr. Frozzi riuniscono alcuni dei migliori
                            medici odontoiatri del nord Italia, con specializzazioni nelle nuove tecniche digitalizzate
                            e una lunga esperienza clinica e di ricerca.
                            Il team si avvale del supporto di personale paramedico altamente qualificato e sempre
                            aggiornato.</p>
                        <div class="col-12">
                            <a class="m-2 custom-info-button btn btn-primary" href="{{route('staff')}}">SCOPRI CHI SIAMO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <x-footer />

</x-layout>
