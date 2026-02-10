<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;


Route::get('/', function () {
    return Inertia::render('Login', [
        'loginProps' => [
            'email' => 'eae',
            'password' => 'eae',
        ]
    ]); 
});



