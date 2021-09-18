<?php

namespace App\Http\Controllers;

class BaixarTurtleTodosController extends Controller
{
    public function download() {
        return view('download');
       }
       public function getTurtle(){
        return response()->download(("C:/Users/Dmatt/Documents/Computação/IC 2021/RotasOnibus/RotasOnibus.ttl"));
    }
        
}