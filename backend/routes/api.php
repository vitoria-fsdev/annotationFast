<?php

use App\Http\Controllers\AnnotationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/annotations', [AnnotationController::class, 'index']);
