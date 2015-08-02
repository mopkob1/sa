<?php
/**
 * Общая для всех окружений конфигурация.
 * Здесь подключаются конфигурации основных параметров сервисов
 */
$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../config/dev.php';
require __DIR__.'/../src/errors.php';   // Настройки страниц ошибок
require __DIR__.'/../src/router.php';   // Роутер
require __DIR__.'/../src/db.php';       // База данных
require __DIR__.'/../src/security.php'; // Фаерволл
require __DIR__.'/../src/renders.php';  // Дополнительные функции Twig