<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Welcome@index')->name('home');
Route::get('/CampoReal', 'CampoReal@queryCampoReal')->name('queryCampoReal');

Route::get('/CEDETEG', 'Cedeteg@pontosCedeteg')->name('pontosCedeteg');
Route::get('/CEDETEG/query/{nomePonto}', 'Cedeteg@queryCedeteg')->name('queryCedeteg');

Route::get('/SantaCruz', 'SantaCruz@pontosSantaCruz')->name('pontosSantaCruz');
Route::get('/SantaCruz/query/{nomePonto}', 'SantaCruz@querySantaCruz')->name('querySantaCruz');

Route::get('/ManualQuery/View', 'ManualQuery@manualQueryView')->name('manualQueryView');
Route::post('/ManualQuery/Results', 'ManualQuery@manualQueryResult')->name('manualQueryResults');

Route::get('/enviar', 'ContatoController@contato')->name('ContatoController@contato');
Route::post('/enviar', 'ContatoController@enviaContato')->name('ContatoController@postContato');

Route::get('/baixar', 'BaixarController@baixar')->name('BaixarController@baixar');
Route::post('/baixar', 'BaixarController@baixar')->name('BaixarController@baixar');

Route::get('/download', 'BaixarTodosController@getDownload')->name('BaixarTodosController@getDownload');
Route::post('/download', 'BaixarTodosController@getDownload')->name('BaixarTodosController@getDownload');

Route::get('/downloadhtml', 'BaixarHtmlTodosController@getHtml')->name('BaixarHtmlTodosController@getHtml');
Route::post('/downloadhtml', 'BaixarHtmlTodosController@getHtml')->name('BaixarHtmlTodosController@getHtml');

Route::get('/downloadttl', 'BaixarTurtleTodosController@getTurtle')->name('BaixarTurtleTodosController@getTurtle');
Route::post('/downloadttl', 'BaixarTurtleTodosController@getTurtle')->name('BaixarTurtleTodosController@getTurtle');

Route::get('/downloadCedeteg', 'BaixarCedetegController@getCedeteg')->name('BaixarCedetegController@getCedeteg');
Route::post('/downloadCedeteg', 'BaixarCedetegController@getCedeteg')->name('BaixarCedetegController@getCedeteg');

Route::get('/downloadSantaCruz', 'BaixarSantaCruzController@getSantaCruz')->name('BaixarSantaCruzController@getSantaCruz');
Route::post('/downloadSantaCruz', 'BaixarSantaCruzController@getSantaCruz')->name('BaixarSantaCruzController@getSantaCruz');

Route::get('/downloadCampoReal', 'BaixarCampoRealController@getCampoReal')->name('BaixarCampoRealController@getCampoReal');
Route::post('/downloadCampoReal', 'BaixarCampoRealController@getCampoReal')->name('BaixarCampoRealController@getCampoReal');

Route::get('/avaliarSite', 'AvaliarController@getAvalia')->name('AvaliarController@getAvalia');
Route::post('/avaliarSite', 'AvaliarController@getAvalia')->name('AvaliarController@getAvalia');

Route::get('/comentarios', 'ComentaController@getComentario')->name('ComentaController@getComentario');
Route::post('/comentarios', 'ComentaController@getComentario')->name('ComentaController@getComentario');

Route::get('/dados', 'DadosController@getDado')->name('DadosController@getDado');
Route::post('/dados', 'DadosController@getDado')->name('DadosController@getDado');

Route::get('/mapa', 'MapaController@getMapa')->name('MapaController@getMapa');
Route::post('/mapa', 'MapaController@getMapa')->name('MapaController@getMapa');

Route::get('/mapasantacruz', 'MapaSantaCruzController@getSantaCruz')->name('MapaSantaCruzController@getSantaCruz');
Route::post('/mapasantacruz', 'MapaSantaCruzController@getSantaCruz')->name('MapaSantaCruzController@getSantaCruz');

Route::get('/mapacamporeal', 'MapaCampoRealController@getCampoReal')->name('MapaCampoRealController@getCampoReal');
Route::post('/mapacamporeal', 'MapaCampoRealController@getCampoReal')->name('MapaCampoRealController@getCampoReal');

Route::get('/mapacedeteg', 'MapaCedetegController@getCedeteg')->name('MapaCedetegController@getCedeteg');
Route::post('/mapacedeteg', 'MapaCedetegController@getCedeteg')->name('MapaCedetegController@getCedeteg');

Route::get('/mapaarmazemSP', 'MapaArmazemSPController@getArmazemsp')->name('MapaArmazemSPController@getArmazemsp');
Route::post('/mapaarmazemSP', 'MapaArmazemSPController@getArmazemsp')->name('MapaArmazemSPController@getArmazemsp');

Route::get('/mapaourobranco', 'MapaOuroBrancoController@getOuroBranco')->name('MapaOuroBrancoController@getOuroBranco');
Route::post('/mapaourobranco', 'MapaOuroBrancoController@getOuroBranco')->name('MapaOuroBrancoController@getOuroBranco');

Route::get('/mapahipersupermercado', 'MapaHiperSupermercadoController@getHiperSupermercado')->name('MapaHiperSupermercadoController@getHiperSupermercado');
Route::post('/mapahipersupermercado', 'MapaHiperSupermercadoController@getHiperSupermercado')->name('MapaHiperSupermercadoController@getHiperSupermercado');

Route::get('/mapacedeteg', 'MapaCedetegController@getCedeteg')->name('MapaCedetegController@getCedeteg');
Route::post('/mapacedeteg', 'MapaCedetegController@getCedeteg')->name('MapaCedetegController@getCedeteg');

Route::get('/mapasesc', 'MapaSescController@getSesc')->name('MapaSescController@getSesc');
Route::post('/mapasesc', 'MapaSescController@getSesc')->name('MapaSescController@getSesc');