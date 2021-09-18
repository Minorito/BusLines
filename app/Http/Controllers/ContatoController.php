<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\ContatoEmail;

class ContatoController extends Controller
{
    public function contato() {
        return view('contato');
       }
       public function enviaContato(Request $request) {
        Mail::to ('lasedrotas@gmail.com')->send(new ContatoEmail($request));
       }          
}   
