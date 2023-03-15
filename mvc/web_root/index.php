<?php
require_once 'controllers/PageController.php';
require_once 'route.php';

$pageController = new PageController();

$route = new Route($_SERVER['REQUEST_URI'], $pageController);
$route->process();