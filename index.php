<?php

use App\Log\Monolog;

require realpath(__DIR__ . '/vendor/autoload.php');

Monolog::gearLog("TESTE DO COMPOSER");

gerarPdf('<h1>Hello world</h1>');

echo 'ok';