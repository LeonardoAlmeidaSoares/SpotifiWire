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
/*
Route::get('/', "SistemaController@index");

Route::post("search", "SistemaController@search");

Route::get("internet", function(){
    $aux = Spotify::searchTracks("TNT")->get();
    dd($aux["tracks"]["items"]);
});
*/

Route::livewire("/", "formulario-de-busca");
Route::livewire("/albuns/{id_artista}", "exibir-albuns");
Route::livewire("/album/{id_album}", "visualizar-album");