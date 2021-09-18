<?php

namespace App\Http\Controllers;

class BaixarCedetegController extends Controller
{
    public function download() {
        return view('download');
       }
       public function getCedeteg(){
        return response()->download(("C:/Users/Dmatt/Documents/Computação/IC 2021/Cedeteg/Cedeteg.rdf"));
    }
        
}