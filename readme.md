## para crear el sitio:
composer require slim/slim:"4.*" slim/psr7 slim/twig-view

## ejecutar server local
php -S localhost:8000 -t public

## iniciar bowser sync
browser-sync start --config bs-config.js
