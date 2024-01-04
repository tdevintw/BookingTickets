<?php

use app\Controllers\ClientController;
use app\Controllers\HomeController;
use app\Controllers\TeamController;
use app\Controllers\StadiumController;
use core\Router;

$router = new Router();

// Home
$router->addRoute('/', HomeController::class, 'index');

// Client Profile
$router->addRoute("/profile", ClientController::class, 'show');

/*********** Admin routes ************/
$router->addRoute('/dashboard', HomeController::class, 'dashboard');

// Team managment
$router->addRoute('/admin/team', TeamController::class, 'index');
$router->addRoute('/admin/team/create', TeamController::class, 'create');
$router->addRoute('/admin/team/store', TeamController::class, 'store');
$router->addRoute('/admin/team/edit', TeamController::class, 'edit');
$router->addRoute('/admin/team/update', TeamController::class, 'update');
$router->addRoute('/admin/team/delete', TeamController::class, 'delete');

// Stadium managment
$router->addRoute('/admin/stadium', StadiumController::class, 'index');
$router->addRoute('/admin/stadium/create', StadiumController::class, 'create');
$router->addRoute('/admin/stadium/store', StadiumController::class, 'store');
$router->addRoute('/admin/stadium/edit', StadiumController::class, 'edit');
$router->addRoute('/admin/stadium/update', StadiumController::class, 'update');
$router->addRoute('/admin/stadium/delete', StadiumController::class, 'delete');
