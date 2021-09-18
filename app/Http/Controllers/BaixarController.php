<?php

namespace App\Http\Controllers;

class BaixarController extends Controller
{
    public function baixar() {
        return view('baixar');
       }
       public function  download($id,Request $request)
{
    $title = 'Download - file';
    if($request->ajax())
    {
        return URL::to('file/'. $id . '/download');
    }
    $file = File::findOrfail($id);
    $fileNome = $file->nome;
    $dir= public_path()."\\$file->user_id\\$fileNome";
    $headers = array(
      'Content-Type: application/pdf',
      );
    $baixar = Response::download($dir, $fileNome, $headers);
    return view('file.download',compact('title','baixar'));
}
}   
