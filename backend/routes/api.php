<?php

use App\Http\Controllers\AnnotationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// o nome ta como annotations.index, annotations.store, annotations.show, annotations.update e annotations.destroy, 
// caso queira reverenciar as rotas em algum controller so usar o name da rota, exemplo: route('annotations.index') para acessar a rota de listagem de anotações
Route::apiResource('annotations', AnnotationController::class);
