<?php

class AuthHelper
{
  public function usuarioLogueado()
  {
    if ($_SESSION['ROL'] != 'ADMIN') {
      return header("Location: " . "login");
      die();
    }
  }
}
