<?php

class ProductosModel
{
  private $db;
  public function __construct()
  {
    $this->db =  new PDO('mysql:host=localhost;dbname=db_tg_informatica;charset=utf8', 'root', '');
  }
  public function traerProductos()
  {
    $query = $this->db->prepare("SELECT * FROM productos");
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
  }
  public function traerProductoPorId($id)
  {
    $query = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
    $query->execute([$id]);
    $producto = $query->fetch(PDO::FETCH_OBJ);
    return $producto;
  }

  public function insertarProducto($nombre, $descripcion, $precio, $stock, $imagen, $id_categoria)
  {
    $query = $this->db->prepare("INSERT INTO productos(nombre, descripcion, precio, stock, imagen, id_categoria) VALUES(?,?,?,?,?,?)");
    $query->execute([$nombre, $descripcion, $precio, $stock, $imagen, $id_categoria]);
    return $this->db->lastInsertId();
  }
  public function eliminarProducto($id_producto)
  {
    $query = $this->db->prepare("DELETE FROM productos WHERE id = ?");
    $query->execute([$id_producto]);
    return $query->rowCount();
  }
  public function editarProducto($nombre, $descripcion, $precio, $stock, $imagen, $id_categoria, $id_producto)
  {
    $query = $this->db->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, stock = ?, imagen = ?, id_categoria = ? WHERE id = ?");
    $query->execute([$nombre, $descripcion, $precio, $stock, $imagen, $id_categoria, $id_producto]);

    return $query->rowCount();
  }
}
