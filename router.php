<?php
// require once controllers
require_once "./app/controllers/PaginaController.php";
require_once "./app/controllers/TiendaController.php";
require_once "./app/controllers/AuthController.php";

session_start();

// tag base
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


$action = "inicio";

if (!empty($_GET['action'])) {
  $action = $_GET['action'];
}
$params = explode('/', $action);

switch ($params[0]) {
  case 'inicio':
    $controller = new PaginaController();
    $controller->mostrarInicio();
    break;
  case 'contacto':
    $controller = new PaginaController();
    $controller->mostrarContacto();
    break;
  case 'nosotros':
    $controller = new PaginaController();
    $controller->mostrarNosotros();
    break;
  case 'tienda':
    $controller = new TiendaController();
    $controller->mostrarInicio();
    break;
  case 'panel':
    $controller = new AuthController();
    $controller->mostrarPanel();
    break;
  case 'agregarProducto':

    break;
  case 'eliminarProducto':
    $id = $params[1];
    $controller = new ProductosController();
    $controller->eliminarProducto($id);
    break;
  case 'editarProducto':

    break;
  case 'agregarCategoria':

    break;
  case 'eliminarCategoria':

    break;
  case 'editarCategoria':

    break;
  default:
    echo "Error 404 not found";
}
