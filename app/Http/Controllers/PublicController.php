<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
  
    public function staff() {

    $staff = [['nome'=> 'Marco','cognome'=>'Pierini','img'=>url("https://cdn.peopleforplanet.it/wp-content/uploads/2020/06/ingegner-cane.jpg"),'descrizione'=>'Io sono ingegnere,ottimismo,ponte,stretto,Messina,spiego le cose!'],
              ['nome'=> 'Maccio','cognome'=>'Pierlini','img'=>url("https://cdn.peopleforplanet.it/wp-content/uploads/2020/06/ingegner-cane.jpg"),'descrizione'=>'La febbra verrà debellata.'],
              ['nome'=>'Tel chi','cognome'=>'El telùn','img'=>url("https://cdn.peopleforplanet.it/wp-content/uploads/2020/06/ingegner-cane.jpg"),'descrizione'=>'Ma certo! Ho capito benissimo! Classico caso di tossico dipendenza, DROGATO! Questa è la verità. ']
    ];

        return view('staff',['staff'=>$staff]);
    }

    public function sceglierci() {

     
            return view('seguirci');
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

}
