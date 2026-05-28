<?php
require_once "./app/views/TiendaView.php";
class TiendaController
{
  private $view;

  public function __construct()
  {
    $this->view = new TiendaView();
  }
  public function mostrarInicio()
  {
    return $this->view->mostrarInicio();
  }
}
