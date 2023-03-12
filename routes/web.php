<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function() {
    return view('chat');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/messages', [App\Http\Controllers\HomeController::class, 'messages'])->name('messages');
Route::post('/messages', [App\Http\Controllers\HomeController::class, 'messageStore'])->name('messageStore');

