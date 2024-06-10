<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('page', [UserController::class, 'index'])->name('user.index');
Route::post('page', [UserController::class, 'store'])->name('user.store');
Route::get('login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('login', [UserController::class, 'login'])->name('user.login.post');

// Adicione uma rota para a página de dashboard (placeholder)
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('page_white', function (){
    return view ('page_white');
})->name('page');

// Rotas para outras páginas (placeholder)
Route::get('historia', function () {
    return view('historia');
})->name('historia');

Route::get('clubes', function () {
    return view('club');
})->name('club');

Route::get('titulos', function () {
    return view('titulos');
})->name('titulos');

Route::get('acess', function () {
    return view('acess');
})->name('acess');
