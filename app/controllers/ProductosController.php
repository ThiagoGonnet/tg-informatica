<?php
require_once "./app/models/ProductosModel.php";
require_once "./app/views/ProductosView.php";
require_once "./app/helpers/AuthHelper.php";
class ProductosController
{
  private $view;
  private $model;
  private $authHelper;

  public function __construct()
  {
    $this->authHelper = new AuthHelper();
    $this->model = new ProductosModel();
    $this->view = new ProductosView();
  }
  public function traerProductos()
  {
    $productos = $this->model->traerProductos();
    return $productos;
  }
  public function traerProductosPorId()
  {
    if (empty($_POST['id_producto']) && isset($_POST['id_producto'])) {
      return $this->view->mostrarError("No se eligió ningún producto!");
    }
    $producto = $this->model->traerProductoPorId($_POST['id_producto']) ?? null;
    if ($producto == null) {
      return $this->view->mostrarError("No existe el producto elegido!");
    }
    return $producto;
  }
  public function insertarProducto()
  {
    if (!isset($_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['id_categoria'])) {
      return $this->view->mostrarError("Complete los campos por favor!");
    }

    if (empty($_POST['nombre']) || empty($_POST['precio']) || $_POST['stock'] === '' || empty($_POST['id_categoria'])) {
      return $this->view->mostrarError("Complete los campos por favor!");
    }

    $nombre = $_POST['nombre'];
    $descripcion = isset($_POST['descripcion']) ? htmlspecialchars($_POST['descripcion']) : null;
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = isset($_POST['imagen']) ? htmlspecialchars($_POST['imagen']) : null;
    $id_categoria = $_POST['id_categoria'];

    $idInsertado = $this->model->insertarProducto($nombre, $descripcion, $precio, $stock, $imagen, $id_categoria);

    if ($idInsertado) {
      header("Location: " . BASE_URL . "admin/productos");
      die();
    } else {
      return $this->view->mostrarError("Error al insertar el producto");
    }
  }
  public function eliminarProducto()
  {
    if (empty($_POST['id_producto']) || !isset($_POST['id_producto'])) {
      return $this->view->mostrarError("No eligio ningún producto!");
    }
    $id_eliminar = $_POST['id_producto'];
    $rowCount = $this->model->eliminarProducto($id_eliminar);

    if ($rowCount > 0) {
      header("Location: " . BASE_URL . "admin/productos");
      die();
    } else {
      return $this->view->mostrarError("Error al eliminar o el producto no existe.");
    }
  }
  public function editarProducto()
  {
    if (!isset($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['id_categoria'])) {
      return $this->view->mostrarError("Complete los campos por favor!");
    }

    if (empty($_POST['id']) || empty($_POST['nombre']) || empty($_POST['precio']) || $_POST['stock'] === '' || empty($_POST['id_categoria'])) {
      return $this->view->mostrarError("Complete los campos por favor!");
    }

    $id_producto = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = isset($_POST['descripcion']) ? htmlspecialchars($_POST['descripcion']) : null;
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = isset($_POST['imagen']) ? htmlspecialchars($_POST['imagen']) : null;
    $id_categoria = $_POST['id_categoria'];

    $rowCount = $this->model->editarProducto($nombre, $descripcion, $precio, $stock, $imagen, $id_categoria, $id_producto);

    if ($rowCount > 0) {
      header("Location: " . BASE_URL . "admin/productos");
      die();
    } else {
      return $this->view->mostrarError("Error al editar el producto");
    }
  }
}
