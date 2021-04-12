<x-layout> 
    <x-navbar/>

                    <div class="padding-top container ">
                        <div class="row align-items-center  bg-color-blue">
                            <div class="custom-heigth img-section parallax2 col-md-6 col-12">
                            
                            </div>
                           
                            <div class="col-md-6 media-parllax2 ">

                                <h2 class="text-light pb-5">Siamo pronti a prenderci cura del tuo sorriso</h2>
                                <form method="POST" action="{{route('feedback')}}">
                                    <div class="form-group mb-3">
                                        @csrf
                                        <label class="custom-label mb-4 fs-5 text-light col-5 col-md-5"
                                            for="exampleInputEmail1">EMAIL</label>
                                        <input class="custom-input col-5" name="email" type="email" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="custom-label mb-4 fs-5 text-light col-5 col-md-5"
                                            for="exampleInputPassword1">NOME</label>
                                        <input class="custom-input col-5" name="user" type="text" class="form-control"
                                            id="exampleInputPassword1" placeholder="Inserisci nome">
                                    </div>
                                    
                                    <div class="form-check">
                                        <p class="custom-label mb-4 fs-5 text-light col-5 col-md-5">MESSAGGIO</p>
                                        <textarea class="col-md-10 col-10 custom-input" name="message" class="form-check-label"
                                            for="exampleCheck1"></textarea>
                                        <button type="submit " class="mt-5 custom-info-button btn btn-primary">INVIA RICHIESTA</button>
                                    </div>
                                </form>


                            </div>

                        </div>
    <x-footer />

</x-layout>