<x-layout>

    <x-navbar />

    <div class="container-fluid img2 center custom-staff-header mb-5">
        <div class="row  justify-content-center">
            <div class=" pt-5  col-8 col-md-6">
                <h2>Affida la salute dei tuoi denti a una squadra di professionisti</h2>
                <p class="mt-3 custom-info">ECCO CHI SIAMO
                </p>

                <a class="custom-info-button btn btn-primary" href="">Scopri di più</a>

            </div>
            <div class="col-md-4 m-5">
            </div>
        </div>
    </div>

    <article>

        <div class="container mb-5">
            <div class="row text-center">
                <div class="col-6 col-md-3">
                    <p class="fs-1 article-color mt-3 custom-info">5</p>
                    <p class="article-color mt-3 custom-info">MEDICI ODONTOIATRI</p>
                </div>
                <div class="col-6 col-md-3">
                    <p class="fs-1 article-color mt-3 custom-info">7</p>
                    <p class="article-color mt-3 custom-info">PARAMEDICI</p>
                </div>
                <div class="col-6 col-md-3">
                    <p class="fs-1 article-color mt-3 custom-info">6</p>
                    <p class="article-color mt-3 custom-info">SALE OPERATORIE ATTREZATE</p>
                </div>
                <div class="col-6 col-md-3">
                    <p class="fs-1 article-color mt-3 custom-info">3</p>
                    <p class="article-color mt-3 custom-info">STUDI DENTISTICI</p>
                </div>
            </div>
        </div>
    </article>

    <section>
        <div class="container"     data-aos="fade-up">
            <div class="row">
                @forEach ($staff as $el)
                <div class="border mt-3 img-section col-md-6 col-12">
                    <img class="img-fluid" src={{$el['img']}} alt="">
                </div>
                <div class="resize border mt-3 bg-primary custom-section col-lg-6 col-12">
                    <h2 class="mt-5">{{$el['nome'].' '.$el['cognome']}}</h2>
                    <p class="mt-5">{{$el['descrizione']}}</p>
                    <a class="mt-5 custom-info-button btn btn-primary" href="">Scopri di più</a>
                </div>
                @endforEach
            </div>
        </div>
    </section>


    <picture>
        <div class="mt-5">
            <img class="col-md-4 col-7 offset-2 offset-md-3" src="https://www.sologossip.it/wp-content/uploads/2019/08/dottor-nowzaradan-vite-limite-chi-%C3%A8-vita-privata.jpg"
                alt="">
            <a id="myBtn" href="{{route('staff')}}" class="pt-5 pb-5 col-md-2 col-6 btn btn-primary">Scopri lo
                Staff</a>
        </div>
    </picture>





    <x-footer />

</x-layout>
