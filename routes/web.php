<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/createRegistro', function () {
        return view('createRegistro');
    })->name('createRegistro');
    Route::get('/createLocal', function () {
        return view('createLocal');
    })->name('createLocal');
    Route::get('/createColaborador', function () {
        return view('createColaborador');
    })->name('createColaborador');
});
