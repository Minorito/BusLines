<?php

namespace App\Http\Controllers;

class BaixarSantaCruzController extends Controller
{
    public function download() {
        return view('download');
       }
       public function getSantaCruz(){
        return response()->download(("C:/Users/Dmatt/Documents/Computação/IC 2021/Santa Cruz/SantaCruz.rdf"));
    }
        
}