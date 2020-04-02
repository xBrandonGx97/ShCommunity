<?php
use Framework\Core\Route;

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $session = new Classes\Utils\Session;
    $userClass = new Classes\Utils\User($session);
    $home = new App\Controllers\Home($userClass);

    // Default Route
    $r->addRoute('GET', '/', [($home), 'index']);

    // Errors
    $r->addGroup('/errors', function (FastRoute\RouteCollector $r) {
        $session = new Classes\Utils\Session;
        $userClass = new Classes\Utils\User($session);
        $errors = new App\Controllers\Errors($userClass);

        $r->addRoute('GET', '/301', [($errors), 'error301']);
        $r->addRoute('GET', '/307', [($errors), 'error307']);
        $r->addRoute('GET', '/400', [($errors), 'error400']);
        $r->addRoute('GET', '/401', [($errors), 'error401']);
        $r->addRoute('GET', '/403', [($errors), 'error403']);
        $r->addRoute('GET', '/404', [($errors), 'error404']);
        $r->addRoute('GET', '/405', [($errors), 'error405']);
        $r->addRoute('GET', '/408', [($errors), 'error408']);
        $r->addRoute('GET', '/500', [($errors), 'error500']);
        $r->addRoute('GET', '/502', [($errors), 'error502']);
    });
});
