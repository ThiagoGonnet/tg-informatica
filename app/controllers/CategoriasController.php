<?php
require_once "./app/models/CategoriasModel.php";
require_once "./app/views/CategoriasView.php";
require_once "./app/helpers/AuthHelper.php";

class CategoriasController
{
  private $model;
  private $view;
  private $authHelper;
  public function __construct()
  {
    $this->model = new CategoriasModel();
    $this->view = new CategoriasView();
    $this->authHelper = new AuthHelper();
  }
  public function agregarCategoria()
  {
    $this->authHelper->usuarioLogueado();
    if (empty($_POST['nombre']) || !isset($_POST['nombre'])) {
      return $this->view->mostrarError("Complete los campos!");
    }
    $nombre = $_POST['nombre'];
    $id = $this->model->agregarCategoria($nombre);
    if ($id) {
      header("Location: " . BASE_URL . "admin/categorias");
      die();
    } else {
      return $this->view->mostrarError("Error al insertar la categoria");
    }
  }
  public function eliminarCategoria()
  {
    $this->authHelper->usuarioLogueado();
    if (empty($_POST['id_categoria']) || !isset($_POST['id_categoria'])) {
      return $this->view->mostrarError("Elija una categoria válida!");
    }
    $id_categoria = $_POST['id_categoria'];
    $rowCount = $this->model->eliminarCategoria($id_categoria);
    if ($rowCount > 0) {
      header("Location: " . BASE_URL . "admin/categorias");
      die();
    } else {
      return $this->view->mostrarError("Error al eliminar o la categoria no existe.");
    }
  }
  public function editarCategoria()
  {
    $this->authHelper->usuarioLogueado();
    if (empty($_POST['id_categoria']) || !isset($_POST['id_categoria']) || empty($_POST['nombre']) || !isset($_POST['nombre'])) {
      return $this->view->mostrarError("Complete los campos o elija la categoria correctamente!");
    }
    $nombre = $_POST['nombre'];
    $id_categoria = $_POST['id_categoria'];

    $rowCount = $this->model->editarCategoria($nombre, $id_categoria);
    if ($rowCount > 0) {
      header("Location: " . BASE_URL . "admin/categorias");
      die();
    } else {
      return $this->view->mostrarError("Error al editar o la categoria no existe.");
    }
  }
}
