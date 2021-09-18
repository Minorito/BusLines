<?php

namespace App\Http\Controllers;

class BaixarHtmlTodosController extends Controller
{
    public function download() {
        return view('download');
       }
       public function getHtml(){
        return response()->download(("C:/Users/Dmatt/Documents/Computação/IC 2021/RotasOnibus/RotasOnibus.html"));
    }
        
}