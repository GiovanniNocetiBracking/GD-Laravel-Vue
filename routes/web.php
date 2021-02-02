<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

//RUTA PARA FORM CONTACT US LANDING PAGE
Route::post('/contact', [ContactController::class, 'sendContact'] );
//RUTA PARA FORM SUSCRIBE LANDING PAGE
Route::post('/suscribe', [ContactController::class, 'saveSubscriber'] );

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth'); 

Route::get('/login', function () {
    return view('login');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// VUE ROUTER
Route::get('/{vue_capture?}', function () {
    return view('welcome');
 })->where('vue_capture', '^(?!storage).*$')->middleware('auth');