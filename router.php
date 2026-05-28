<?php
// require once controllers
require_once "./app/controllers/PaginaController.php";
require_once "./app/controllers/TiendaController.php";

session_start();

// tag base
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


$action = "home";

if (!empty($_GET['action'])) {
  $action = $_GET['action'];
}
$params = explode('/', $action);

switch ($params[0]) {
  case 'home':
    $controller = new PaginaController();
    $controller->mostrarInicio();
    break;
  case 'contact':
    $controller = new PaginaController();
    $controller->mostrarContacto();
    break;
  case 'about':
    $controller = new PaginaController();
    $controller->mostrarNosotros();
    break;
  case 'shop':
    $controller = new TiendaController();
    $controller->mostrarInicio();
    break;
  default:
    echo "Error 404 not found";
}
