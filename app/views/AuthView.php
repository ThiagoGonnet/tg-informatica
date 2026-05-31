<?php

class AuthView
{
  public function mostrarPanelAdm($categorias, $productos)
  {
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once "./app/views/templates/dashboardAdmin.phtml";
    require_once './app/views/layouts/footer.php';
  }
}
