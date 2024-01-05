<?php

use app\Controllers\Admin\AdminController;
use app\Controllers\Admin\MatcheController;
use app\Controllers\Admin\TeamController as AdminTeamController;
use app\Controllers\ClientController;
use app\Controllers\HomeController;
use app\Controllers\TeamController;
use app\Controllers\TicketController;
use core\Router;

$router = new Router();

// Pages
$router->addRoute('/', HomeController::class, 'home');
$router->addRoute('/about', HomeController::class, 'about');
$router->addRoute('/home', IndexController::class, 'home');

// Matche Managment
$router->addRoute('/matches', MatcheController::class, 'index');


// Ticket Managment
$router->addRoute('/form', TicketController::class, 'form');
$router->addRoute('/ticket/create', TicketController::class, 'create');
// $router->addRoute('/pdf', TicketController::class, 'create');



// Team resource
$router->addRoute('/team', TeamController::class, 'index');

// Client Profile
$router->addRoute("/profile", ClientController::class, 'show');

/*********** Admin routes ************/
$router->addRoute('/admin/dashboard', AdminController::class, 'dashboard');


