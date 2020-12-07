<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
/* Route::get('/users', function () {
    return view('users');
}); */
Route::get('/login', function () {
    return view('login');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// VUE ROUTER
Route::get('/{vue_capture?}', function () {
    return view('home');
 })->where('vue_capture', '^(?!storage).*$')->middleware('auth');