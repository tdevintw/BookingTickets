<?php

use app\Controllers\Admin\AdminController;
use app\Controllers\Admin\TeamController as AdminTeamController;
use app\Controllers\HomeController;
use app\Controllers\TeamController;
use core\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/team', TeamController::class, 'index');

/*********** Admin routes ************/
$router->addRoute('/admin/dashboard', AdminController::class, 'dashboard');

// Team managment
$router->addRoute('/admin/team', AdminTeamController::class, 'index');
$router->addRoute('/admin/team/create', AdminTeamController::class, 'create');
// $router->addRoute('/admin/team/store', AdminTeamController::class, 'create');
$router->addRoute('/admin/team/delete', AdminTeamController::class, 'delete');
