<?php

use Kirito\Server\HttpServer;

include dirname(__DIR__).'/vendor/autoload.php';

$config = include dirname(__DIR__).'/config/parameters.php';
$kernel = new Kirito\Kernel($config);

$server = new HttpServer;
$server->setKernel($kernel);
return $server;