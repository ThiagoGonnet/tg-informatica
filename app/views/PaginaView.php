<?php

class PaginaView
{
  public function mostrarInicio()
  {
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once "./app/views/templates/home.php";
    require_once './app/views/layouts/footer.php';
  }
  public function mostrarContacto()
  {
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once './app/views/templates/contacto.php';
    require_once './app/views/layouts/footer.php';
  }
  public function mostrarNosotros()
  {
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once "./app/views/templates/nosotros.php";
    require_once './app/views/layouts/footer.php';
  }
}
