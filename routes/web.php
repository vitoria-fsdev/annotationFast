<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;


Route::get('/', function () {
    return Inertia::render('Home', [
        'users' => User::all(),
        'message' => 'Sucesso! A aplicação está funcionando.',
    ]); 
});



