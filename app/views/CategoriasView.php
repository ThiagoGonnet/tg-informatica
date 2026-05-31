<?php

class CategoriasView
{
  public function mostrarCategorias()
  {
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once "./app/views/templates/home.php";
    require_once './app/views/layouts/footer.php';
  }
  public function mostrarError($msj)
  {
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once "./app/views/templates/tienda.php";
    require_once './app/views/layouts/footer.php';
  }
}
