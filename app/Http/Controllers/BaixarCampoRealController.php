<?php

namespace App\Http\Controllers;

class BaixarCampoRealController extends Controller
{
    public function download() {
        return view('download');
       }
       public function getCampoReal(){
        return response()->download(("C:/Users/Dmatt/Documents/Computação/IC 2021/Campo Real/CampoReal.rdf"));
    }
        
}