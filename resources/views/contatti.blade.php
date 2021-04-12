<x-layout>

    <x-navbar />

    <section class="transition-section padding-top">
        <div class="container">
            <div class=" custom-heigth row">
                <div class="img-section parallax col-md-6 col-12">
                </div>
                <div class="bg-color-blue custom-section col-md-6 col-12">
                    <h2 class="mt-2">É il tuo primo appuntamento?</h2>
                    <p class="">Dalle attività specialistiche più complesse alle semplici operazioni di routine, negli
                        Studi Dentistici
                        Dr. Frozzi trovi un team di professionisti pronto a offrirti il miglior livello di prestazioni
                        in ogni tipologia di intervento.</p>
                    <a class="mt-5 p-3 custom-info-button btn btn-primary" href="">PRENOTA LA VISITA SENZA IMPEGNO</a>

                </div>
            </div>
        </div>
        </div>
    </section>




   {{-- <form>
        <div class="pt-5 container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <img class="col-md-2 col-2 img-dente"
                            src="https://www.matteofrozzi.it/wp-content/uploads/2015/05/contact-icon1.png" alt="">
                        <h2 class="col-sm-9 col-10 text-custom-change article-color">Hai bisogno di informazioni sui nostri studi dentistici?</h2>
                    </div>
                    <div class="row">
                        <p class="col-2"></p>
                        <p class="col-md-6 col-12 article-color">Compila il form e seleziona dal menu a tendina l’argomento della
                            tua richiesta.
                            Ti risponderemo nel più breve tempo possibile.</p>
                    </div>
                </div> --}}
                {{-- <div class="col-12 col-lg-6">
                    <div class="row">
                        <form method="POST" action="{{route('feedback')}}">
                            <label class="custom-label mb-1 custom-info article-color col-5 col-md-5" for="">NOME</label>
                            {{-- <label class="custom-label mb-1 custom-info article-color col-5 col-md-5" for="">COGNOME</label> --}}
                            {{-- <input nome="nome" class="custom-input col-5" type="text"> --}}
                            {{-- <input class="custom-input col-5" type="text"> --}}
                            {{-- <label class="custom-label mb-1 col-5 custom-info article-color  col-md-5 mt-3" for="">EMAIL</label> --}}
                            {{-- <label class="custom-label mb-1 col-5 custom-info article-color  col-md-5 mt-3" for="">TELEFONO</label> --}}
                            {{-- <input class="custom-input col-5 col-md-5" type="text"> --}}
                            {{-- <input class="custom-input col-5 col-md-5" type="text"> --}}
                            {{-- <label class="custom-label mb-1 custom-info article-color col-12 mt-3" for="">MESSAGGIO</label>
                            <textarea class="col-12 custom-input" name="messaggio" id="" cols="30" rows="10"></textarea>
                            <button type="submit">INVIA</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>




    </form>
        --}}




    <form method="POST" action="{{route('feedback')}}">
  <div class="form-group">
     @csrf
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="user" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="text" class="form-check-input" id="exampleCheck1">
    <textarea name="message" class="form-check-label" for="exampleCheck1">Check me out</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






    <x-footer />

</x-layout>
