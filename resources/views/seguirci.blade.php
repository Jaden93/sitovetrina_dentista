<x-layout>

    <x-navbar />
    <header>
        <div class="padding-top container-fluid center  bg-light mb-5">
            <div class="container w-75">
                <div class="row">
                    <div class="pt-5 col-md-6 col-12">
                        <h2 class="section-font article-color">Puoi sentirti a tuo agio anche dal dentista</h2>
                        <p class="article-color mt-3 custom-info">SCEGLI IL MEGLIO DELL'ODONTOIATRIA</p>
                        <div class="row">
                            <a class="m-2 col-6 custom-info-button btn btn-primary" href="">COSA DICONO I NOSTRI PAZIENTI</a>
                            <a class="m-2 col-6 custom-info-button btn btn-primary" href="">SANIFICAZIONE COVID-19</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container-fluid center custom-header img-scegliere mb-5">
            <div class="daje container w-75">
                <div class="row">
                    <div class="pt-5 col-md-6 col-12">
                    </div>
                    <div class="pt-5 col-md-6 col-12">
                        <h2 class="section-font article-color">Ogni spazio è progettato pensando a te</h2>
                        <p class="text-light mt-3 custom-info">STAR BENE È ANCHE UNA QUESTIONE DI STILE</p>
                        <div class="col-12">
                            <a class="m-2 custom-info-button btn btn-primary" href="">GUARDA LA GALLERY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        @forEach ($descriptions as $description)
        <div class=" container-fluid bg-color pb-5" data-aos="fade-out">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-3 col-12  img-circle-center ">
                        <img class="mb-4 rounded-circle img-circle"
                            src="{{$description['img']}}">
                    </div>
                    <div class="col-md-9 col-12 ">
                        <h2 class="article-color section-font">{{$description['title']}}</h2>
                        <div class="due-colonne">
                            <p class="article-color">{{$description['descrizione']}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforEach

 

    
    </section>









    <x-footer />

</x-layout>
