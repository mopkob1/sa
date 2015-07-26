<?php

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../config/prod.php';
require __DIR__.'/../src/errors.php';   // Настройки страниц ошибок
require __DIR__.'/../src/router.php';   // Роутер
require __DIR__.'/../src/security.php'; // Фаерволл
require __DIR__.'/../src/renders.php';  // Дополнительные функции Twig
$app->run();
