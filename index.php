<?php
require 'router.php';
require 'lib/utils.php';

$router = new Router();

$router->add('/veba/', 'controllers/home.php');
$router->add('/veba/about', 'controllers/about.php');
$router->add('/veba/contact', 'controllers/contact.php');
$router->add('/veba/recipes', 'controllers/recipes.php');
$router->add('/veba/blogs', 'controllers/blogs.php');

$router->route($_SERVER['REQUEST_URI']);
?>