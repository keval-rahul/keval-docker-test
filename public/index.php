<?php
require_once '../config/config.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/HomeController.php';

// Routing Logic
$url = isset($_GET['url']) ? explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : ['HomeController', 'index'];

$controller = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'HomeController';
$method = isset($url[1]) ? $url[1] : 'index';

require_once "../app/controllers/$controller.php";
$instance = new $controller();

if (method_exists($instance, $method)) {
    call_user_func_array([$instance, $method], array_slice($url, 2));
} else {
    die("Method not found");
}
?>
