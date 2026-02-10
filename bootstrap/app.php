<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
    )
    //conecta o Inertia com o Laravel, para que o Inertia possa lidar com as requisições e respostas do Laravel, por isso, usamos esse middleware para registrar o HandleInertiaRequests, que é responsável por lidar com as requisições do Inertia e enviar as respostas corretas para o cliente.
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

    // o folder bootstrap é responsável por configurar o ambiente de execução do Laravel, como carregar as dependências, configurar o autoloading, registrar os providers e middlewares, entre outras coisas. O arquivo app.php é o ponto de entrada para a aplicação, onde a instância do Application é criada e configurada. Ele também é responsável por registrar as rotas da aplicação, os middlewares e as exceções.