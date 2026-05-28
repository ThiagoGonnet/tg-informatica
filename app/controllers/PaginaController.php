<?php
require_once "./app/views/PaginaView.php";
class PaginaController
{
  private $view;

  public function __construct()
  {
    $this->view = new PaginaView();
  }
  public function mostrarInicio()
  {
    return $this->view->mostrarInicio();
  }
  public function mostrarContacto()
  {
    return $this->view->mostrarContacto();
  }
  public function mostrarNosotros()
  {
    return $this->view->mostrarNosotros();
  }
}
