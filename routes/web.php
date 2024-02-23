<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;
use Faker\Guesser\Name;

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

// Rotta per home 
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// Rotta per creazione annuncio //!con livewire 
Route::get('/create-announcement', [AnnouncementController::class, 'createAnnouncement'])->name('create_announcement');

// Rotta per annunci per categoria 
Route::get('/categorie/{category}', [PublicController::class, 'showCategory'])->name('showCategory');

// * rotte per il controllo degli annunci
// Rotta per dettaglio annuncio 
Route::get('/annuncio/{announcement}', [AnnouncementController::class, 'showDetail'])->name('announcement_detail');

// rotta per index annunci 
Route::get('/index-announcements', [AnnouncementController::class, 'indexAnnouncements'])->name('indexAnnouncements');

//!rotte per i controlli del revisore 
// rotta home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
// accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
// rotta per  il rifiuto dell'annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

// rotta per ricerca annuncio 
Route::get('/ricerca/annuncio', [PublicController::class, 'searchAnnouncement'])->name('search_announcement');

// pagina per richiedere di diventare revisori 
Route::get('/diventa_revisore', [RevisorController::class, 'formRevisor'])->middleware('auth')->name('form_revisor');

// * richiesta all'amministratore di diventare revisore
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// * rendi utente revisore
Route::get('/rendi/revisore/{email}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// rotta per cambio lingua 
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
