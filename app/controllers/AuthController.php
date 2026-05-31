<?php
require_once "./app/helpers/AuthHelper.php";
require_once "./app/views/AuthView.php";
require_once "./app/models/CategoriasModel.php";
require_once "./app/models/ProductosModel.php";

class AuthController
{
  private $modelProductos;
  private $modelCategorias;
  private $view;
  private $authHelper;

  public function __construct()
  {
    $this->modelProductos = new ProductosModel();
    $this->modelCategorias = new CategoriasModel();
    $this->view = new AuthView();
    $this->authHelper = new AuthHelper();
  }
  public function mostrarPanel()
  {
    // $this->authHelper->usuarioLogueado();
    $categorias = $this->modelCategorias->traerCategorias();
    $productos = $this->modelProductos->traerProductos();
    return $this->view->mostrarPanelAdm($categorias, $productos);
  }
}
