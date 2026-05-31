<?php

class CategoriasModel
{
  private $db;
  public function __construct()
  {
    $this->db =  new PDO('mysql:host=localhost;dbname=db_tg_informatica;charset=utf8', 'root', '');
  }
  public function traerCategorias()
  {
    $query = $this->db->prepare("SELECT * FROM categorias");
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
  }
  public function traerCategoriaPorId($id)
  {
    $query = $this->db->prepare("SELECT * FROM categorias WHERE id = ?");
    $query->execute([$id]);
    $categoria = $query->fetch(PDO::FETCH_OBJ);
    return $categoria;
  }
  public function agregarCategoria($nombre)
  {
    $query = $this->db->prepare("INSERT INTO categorias(nombre) VALUES(?)");
    $query->execute([$nombre]);
    return $this->db->lastInsertId();
  }

  public function eliminarCategoria($id_categoria)
  {
    $query = $this->db->prepare("DELETE categorias WHERE id = ?");
    $query->execute([$id_categoria]);
    return $query->rowCount();
  }
  public function editarCategoria($nombre, $id_categoria)
  {
    $query = $this->db->prepare("UPDATE categorias SET nombre = ? WHERE id = ?");
    $query->execute([$nombre, $id_categoria]);
    return $query->rowCount();
  }
}
