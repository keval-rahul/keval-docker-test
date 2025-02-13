<?php
require_once '../config/config.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/HomeController.php';

// Routing Logic
$url = isset($_GET['url']) ? explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : ['Home', 'index'];

$controllerName = ucfirst($url[0]);
$controllerFile = "../app/controllers/{$controllerName}Controller.php";

// Check if the controller file exists before requiring it
if (!file_exists($controllerFile)) {
    die("Controller file not found: " . $controllerFile);
}

require_once $controllerFile;
$controllerClass = $controllerName . 'Controller';

if (!class_exists($controllerClass)) {
    die("Controller class not found: " . $controllerClass);
}

$instance = new $controllerClass();
$method = isset($url[1]) ? $url[1] : 'index';

// Check if the method exists in the controller
if (method_exists($instance, $method)) {
    call_user_func_array([$instance, $method], array_slice($url, 2));
} else {
    die("Method '$method' not found in $controllerClass");
}
?>

