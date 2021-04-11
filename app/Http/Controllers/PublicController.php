<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
  
    public function staff() {

    $staff = [['nome'=> 'Marco','cognome'=>'Pierini','img'=>url("https://cdn.peopleforplanet.it/wp-content/uploads/2020/06/ingegner-cane.jpg"),'descrizione'=>'Io sono ingegnere,ottimismo,ponte,stretto,Messina,spiego le cose!'],
              ['nome'=> 'Maccio','cognome'=>'Pierlini','img'=>url("https://movieplayer.net-cdn.it/t/images/2016/04/05/maccio_capatonda_-_dr_house001_jpeg_1200x0_crop_q85.jpg"),'descrizione'=>'La febbra verrà debellata.'],
              ['nome'=>'Tel chi','cognome'=>'El telùn','img'=>url("https://cinema.icrewplay.com/wp-content/uploads/2019/06/GAL_5-696x368.jpg"),'descrizione'=>'Ma certo! Ho capito benissimo! Classico caso di tossico dipendenza, DROGATO! Questa è la verità. ']
    ];

        return view('staff',['staff'=>$staff]);
    }

    public function sceglierci() {

     
            return view('seguirci');
    }

    public function dovesiamo() {
            return view('dovesiamo');
    }


    public function contatti() {
        return view('contatti');
    }

}
