<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

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

// Rotta per creazione annuncio 
Route::get('/create-announcement', [AnnouncementController::class, 'createAnnouncement'])->name('create_announcement');

// Rotta per annunci per categoria 
Route::get('/categorie/{category}', [PublicController::class, 'showCategory'])->name('showCategory');

// Rotta per dettaglio annuncio 
Route::get('/annuncio/{announcement}', [AnnouncementController::class, 'showDetail'])->name('announcement_detail');

// rotta per index annunci 
Route::get('/index-announcements', [AnnouncementController::class, 'indexAnnouncements'])->name('indexAnnouncements');