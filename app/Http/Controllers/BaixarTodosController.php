<?php

namespace App\Http\Controllers;

class BaixarTodosController extends Controller
{
    public function download() {
        return view('download');
       }
       public function getDownload(){
        return response()->download(("C:/Users/Dmatt/Documents/Computação/IC 2021/RotasOnibus/RotasOnibus.rdf"));
    }
        
}