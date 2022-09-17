<?php

use Illuminate\Support\Facades\Route;


Auth::routes(['regiser'=>false]);

Route::match(['get', 'post'], 'register', function(){
    return redirect('/login');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
