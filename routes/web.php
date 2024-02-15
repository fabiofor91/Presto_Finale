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
