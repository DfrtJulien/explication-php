<?php
require "vendor/autoload.php";


require_once "Config/Router.php";

use Config\Router;

$router = new Router();

//la page d'accueil
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/deuxieme-etape', 'HomeController', 'deuxieme');
$router->addRoute('/deuxieme-etape', 'HomeController', 'deuxieme');



$router->handleRequest();
