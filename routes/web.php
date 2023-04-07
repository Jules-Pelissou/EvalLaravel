<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Recette;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('index');
});

Route::get('/', function () {
    return view('accueil');
});

Route::get('liste', function () {
    $recettes = Recette::get();
    return view('liste_recettes',["recettes"=>$recettes]);
   });

   Route::get('recherche', function (Request $request) {
    // -- Liste des livres (toutes les infos)
    $recettes = Recette::where('titre','LIKE','%'.$request->trouve.'%');
    return view('resultat_recherche', ["recettes"=>$recettes]);
});