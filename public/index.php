<?php

use app\core\Router;

require '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

//dd($_SERVER);
//dd(RequestType::get());


Router::run();