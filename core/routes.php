<?php

use app\Controllers\Admin\AdminController;
use app\Controllers\Admin\TeamController as AdminTeamController;
use app\Controllers\ClientController;
use app\Controllers\HomeController;
use app\Controllers\TeamController;
use core\Router;

$router = new Router();

// Home
$router->addRoute('/', HomeController::class, 'index');

// Team resource
$router->addRoute('/team', TeamController::class, 'index');

// Client Profile
$router->addRoute("/profile", ClientController::class, 'show');

/*********** Admin routes ************/
$router->addRoute('/admin/dashboard', AdminController::class, 'dashboard');

// Team managment
$router->addRoute('/admin/team', AdminTeamController::class, 'index');
$router->addRoute('/admin/team/create', AdminTeamController::class, 'create');
// $router->addRoute('/admin/team/store', AdminTeamController::class, 'create');
$router->addRoute('/admin/team/delete', AdminTeamController::class, 'delete');
