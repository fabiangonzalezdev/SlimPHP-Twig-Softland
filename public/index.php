<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

// Crear la aplicación Slim
$app = AppFactory::create();

// Crear la instancia de Twig
$twig = Twig::create(__DIR__ . '/../templates', ['cache' => false]);

// Añadir el middleware de Twig
$app->add(TwigMiddleware::create($app, $twig));

// Definir la ruta para la página principal
$app->get('/', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'home.twig');
});

// Ejecutar la aplicación
$app->run();
