<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function menue(){

        return view('user/contact');

    }

    public function menue1(){

<<<<<<< HEAD
        return view('wp-admin/Menuef');
=======
        return view('Menue');
>>>>>>> 1a44ab56fe4a021dd1b0a2706e2d4a497b9f7ec4

    }

    public function pro (){
        return view('versionpro');
    }

    public function payement (){
        return view('formPayement');
    }


    
    
}
