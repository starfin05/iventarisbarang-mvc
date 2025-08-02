<?php
require_once '../config/database.php';

$url = $_GET['url'] ?? 'barang/index';
$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . 'Controller';
$method = $url[1] ?? 'index';

require_once "../app/controllers/$controllerName.php";
$controller = new $controllerName($pdo);
$controller->$method();
?>

