<?php

class TiendaView{
  public function mostrarInicio(){
    require_once './app/views/layouts/header.php';
    require_once './app/views/layouts/head.php';
    require_once "./app/views/templates/tienda.php";
    require_once './app/views/layouts/footer.php';
  }
}
