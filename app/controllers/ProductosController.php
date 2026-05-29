<?php
require_once "./app/models/ProductosModel.php";
require_once "./app/views/ProductosView.php";
class ProductosController
{
  private $view;
  private $model;

  public function __construct()
  {
    $this->model = new ProductosModel();
    $this->view = new ProductosView();
  }
  public function traerProductos() {}
}
