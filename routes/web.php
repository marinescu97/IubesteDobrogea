<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EvenimentController;
use App\Http\Controllers\EvenimenteController;
use App\Http\Controllers\Producator\AnuntController;
use App\Http\Controllers\Producator\ProfilController;
use App\Http\Controllers\Producator\SetariController;
use App\Http\Controllers\ProducatoriController;
use App\Http\Controllers\ProdusController;
use App\Http\Controllers\ProduseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('acasa');
})->name('acasa');

Route::get('producatori', [ProducatoriController::class, 'afiseazaProducatori'])->name('producatori');
Route::get('producatori/fetch_data', [ProducatoriController::class, 'fetch_data']);
Route::get('producatori/search', [ProducatoriController::class, 'search']);

Route::get('produse', [ProduseController::class, 'afiseazaProduse'])->name('produse');
Route::get('produse/fetch_data', [ProduseController::class, 'fetch_data']);
Route::get('produse/search', [ProduseController::class, 'search']);

Route::get('/produs/{id}/{denumire}', [ProdusController::class, 'afiseazaProdus'])->name('produs');
Route::get('categorie/{id}/{numecategorie}', [ProduseController::class, 'categorieproduse'])->name('produse-categorie');
Route::get('producator/{id}/{numeproducator}', [ProduseController::class, 'producatorproduse'])->name('produse-producator');

Route::get('contact',[ContactController::class, 'afiseazaFormular'])->name('contact');
Route::post('adaugare-contact',[ContactController::class, 'adaugare'])->name('mesaj-contact');

Route::get('evenimente', [EvenimenteController::class, 'afiseazaEvenimente'])->name('listaevenimente');
Route::get('evenimente/fetch_data', [EvenimenteController::class, 'fetch_data']);
Route::get('evenimente/search', [EvenimenteController::class, 'search']);
Route::get('eveniment/{id}/{titlu}', [EvenimentController::class, 'afiseazaEveniment'])->name('eveniment');
Route::post('stergere-anunt/{id}', [EvenimentController::class, 'stergereAnunt'])->name('stergereanunt');

Route::group([ 'as'=>'producator.' ,'prefix'=>'producator', 'namespace'=>'Producator', 'middleware'=>['auth', 'producator']],function(){
    Route::get('profil',[ProfilController::class, 'afiseazaProfil'])->name('profil');
    Route::get('setari',[SetariController::class, 'index'])->name('setari');
    Route::get('setari/afiseazaLocalitati/{id}', [SetariController::class, 'afiseazaLocalitati']);
    Route::post('setari-profil',[SetariController::class, 'setari'])->name('setari-profil');
    Route::post('stergere',[SetariController::class, 'stergereProducator'])->name('stergere');
    Route::get('adauga-un-produs', [\App\Http\Controllers\Producator\ProdusController::class, 'index'])->name('adaugaprodus');
    Route::post('adaugare-produs', [\App\Http\Controllers\Producator\ProdusController::class, 'adaugareProdus'])->name('adaugareprodus');
    Route::post('stergere-produs/{id}', [\App\Http\Controllers\Producator\ProdusController::class, 'stergereProdus'])->name('stergereprodus');
    Route::get('adauga-un-eveniment', [\App\Http\Controllers\Producator\EvenimentController::class, 'index'])->name('adaugaeveniment');
    Route::get('adauga-un-eveniment/afiseazaLocalitati/{id}', [\App\Http\Controllers\Producator\EvenimentController::class, 'afiseazaLocalitati']);
    Route::post('adaugare-eveniment', [\App\Http\Controllers\Producator\EvenimentController::class, 'adaugare'])->name('adaugareeveniment');
    Route::post('adaugare-anunt', [AnuntController::class, 'adaugareAnunt'])->name('adaugareanunt');
});

Route::group([ 'as'=>'admin.',  'prefix'=>'admin' , 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']],function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('setari',[SetariController::class, 'index'])->name('setari');
    Route::get('setari/afiseazaLocalitati/{id}', [SetariController::class, 'afiseazaLocalitati']);
    Route::post('setari-profil',[SetariController::class, 'setari'])->name('setari-profil');
    Route::get('producatori', [\App\Http\Controllers\Admin\ProducatoriController::class, 'index'])->name('producatori');
    Route::post('stergereproducator/{id}', [\App\Http\Controllers\Admin\ProducatoriController::class, 'stergere'])->name('stergereproducator');
    Route::get('produse', [\App\Http\Controllers\Admin\ProduseController::class, 'index'])->name('produse');
    Route::get('produse/afiseazaLocalitati/{id}', [\App\Http\Controllers\Admin\ProduseController::class, 'afiseazaLocalitati'])->name('produse.afiseazaLocalitati');
    Route::get('produs/modal/{id}', [\App\Http\Controllers\Admin\ProduseController::class, 'getModalData']);
    Route::post('stergereprodus/{id}', [\App\Http\Controllers\Admin\ProduseController::class, 'stergereProdus'])->name('stergereprodus');
    Route::get('mesaje',[\App\Http\Controllers\Admin\ContactController::class, 'listaMesaje'])->name('mesaje');
    Route::post('stergeremesaj/{id}', [\App\Http\Controllers\Admin\ContactController::class, 'stergereMesaj'])->name('stergeremesaj');
    Route::get('evenimente', [\App\Http\Controllers\Admin\EvenimenteController::class, 'index'])->name('evenimente');
    Route::get('eveniment/modal/{id}', [\App\Http\Controllers\Admin\EvenimenteController::class, 'getModalData']);
    Route::post('stergereeveniment/{id}', [\App\Http\Controllers\Admin\EvenimenteController::class, 'stergereEveniment'])->name('stergereeveniment');
    Route::get('adauga-un-eveniment', [\App\Http\Controllers\Admin\EvenimentController::class, 'index'])->name('adaugaeveniment');
    Route::get('adauga-un-eveniment/afiseazaLocalitati/{id}', [\App\Http\Controllers\Admin\EvenimentController::class, 'afiseazaLocalitati']);
    Route::post('adaugare-eveniment', [\App\Http\Controllers\Admin\EvenimentController::class, 'adaugare'])->name('adaugareeveniment');
});

Route::get('/mail', function () {
    return view('emails.forgotPassword');
})->name('email');

require __DIR__.'/auth.php';
