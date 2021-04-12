<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class PublicController extends Controller
{
  
    public function staff() {

    $staff = [['nome'=> 'Marco','cognome'=>'Pertini','img'=>url("https://cdn.peopleforplanet.it/wp-content/uploads/2020/06/ingegner-cane.jpg"),'descrizione'=>'Io sono ingegnere,ottimismo,ponte,stretto,Messina,spiego le cose!'],
              ['nome'=> 'Maccio','cognome'=>'Pierlini','img'=>url("https://movieplayer.net-cdn.it/t/images/2016/04/05/maccio_capatonda_-_dr_house001_jpeg_1200x0_crop_q85.jpg"),'descrizione'=>'La febbra verrà debellata.'],
              ['nome'=>'Tel chi','cognome'=>'El telùn','img'=>url("https://cinema.icrewplay.com/wp-content/uploads/2019/06/GAL_5-696x368.jpg"),'descrizione'=>'Ma certo! Ho capito benissimo! Classico caso di tossico dipendenza, DROGATO! Questa è la verità. ']
    ];

        return view('staff',['staff'=>$staff]);
    }

    public function sceglierci() {

        $descriptions = [['title'=>'I migliori professionisti','descrizione'=>'Negli Studi Dentistici Dr. Frozzi puoi contare su un team d’eccellenza nel campo dell’odontoiatria d’avanguardia. La nostra équipe riunisce alcuni dei migliori medici odontoiatri del nord Italia, con specializzazioni nelle nuove tecniche digitalizzate e una lunga esperienza clinica e di ricerca.Gli specialisti che lavorano con Matteo Frozzi possono avvalersi del supporto di personale paramedico altamente qualificato e sempre aggiornato, così da offrirti la massima professionalità e le migliori prestazioni.','img'=>url('https://www.matteofrozzi.it/wp-content/uploads/2015/05/strumenti-1.jpg')],
            ['title'=>'Le tecnologie più avanzate','descrizione'=>'Oggi la tecnologia sta trasformando il modo stesso di concepire l’odontoiatria, e tu hai l’opportunità di scegliere quei professionisti che meglio sanno applicarla nella cura del paziente.Tutte le apparecchiature a disposizione degli Studi Dentistici Dr. Frozzi sono le più sofisticate e all’avanguardia: grazie alla nostra tac a bassissimo dosaggio di radiazioni, ad esempio, puoi sottoporti agli esami diagnostici direttamente in studio, senza attese.La tempestività delle prestazioni è favorita anche dall’impiego di software di ultima generazione, per interventi più rapidi e meno invasivi.','img'=>url('https://www.matteofrozzi.it/wp-content/uploads/2015/05/strumenti-2.jpg')]
        ];

            return view('seguirci',['descriptions'=>$descriptions]);
    }

    public function dovesiamo() {

        $luoghi = [
        ['sede'=>'Studio di Vicenza','via'=>'Viale Mercato Nuovo, 44/F - 36100 Vicenza (VI)','orario'=>'09.00 - 13:00','giorni'=>'Lunedì e Mercoledì','tel'=>'044 4960057'],
        ['sede'=>'Studio di Cento','via'=>'Via Baruffaldi, 5/1 44042 Cento (FE)','orario'=>'09.00 - 18:00','giorni'=>'Lunedì, Martedì e Mercoledì','tel'=>'051 903603'],
        ['sede'=>'Studio di Ferrara','via'=>'Corso Porta Mare, 51 44121 Ferrara (FE)','orario'=>'15.00 - 19.30','giorni'=>'Lunedì, Martedì, Mercoledì, Giovedì','tel'=>'051 903603']
        ];
       
        return view('dovesiamo',['luogo'=>$luoghi]);
    }


    public function contatti() {
        

        return view('contatti');
    }

    public function feedback(Request $req) {
        // solo parametri ->all()

        $user = $req->input('nome');
        $message = $req->input('message');
        $email = $req->input('email');
        $contact = compact('user','message');
        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('homepage'))->with('message','Abbiamo ricevuto la tua richiesta, verrai ricontattato a breve');

    }

    public function primoapp() {
        return view('primoapp');
    }

}
