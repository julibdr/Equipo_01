<?php
namespace classes;

use PDO;
require_once 'Connection.php';

class Carrito
{
    protected $id;
    protected $id_producto;
    protected $id_usuario;
    protected $cantidad;

    public function getAll(): array
    {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM carrito";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getCarritoId()
    {
        return $this->id;
    }

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function agregarAlCarrito($id_producto, $id_usuario, $cantidad)
    {
        $conexion = (new Connection())->getConection();
        $query = "INSERT INTO carrito (id_producto, id_usuario, cantidad) VALUES (:id_producto, :id_usuario, :cantidad)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id_producto', $id_producto);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->execute();

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
        $_SESSION['carrito'][] = [
            'id_producto' => $id_producto,
            'id_usuario' => $id_usuario,
            'cantidad' => $cantidad
        ];
    }

    public function aumentarCantidad($id_producto)
    {
        $conexion = (new Connection())->getConection();
        $query = "UPDATE carrito SET cantidad = cantidad + 1 WHERE id_producto = :id_producto";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id_producto', $id_producto);
        $stmt->execute();
    }

    public function disminuirCantidad($id_producto)
    {
        $conexion = (new Connection())->getConection();
        $query = "UPDATE carrito SET cantidad = cantidad - 1 WHERE id_producto = :id_producto";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id_producto', $id_producto);
        $stmt->execute();

        // Obtener la nueva cantidad después de la disminución
        $nueva_cantidad = $this->getCantidad($id_producto);

        // Verificar si la cantidad llegó a cero y eliminar el registro si es así
        if ($nueva_cantidad <= 0) {
            $this->eliminarCarrito($id_producto);
        }
    }

    public function eliminarCarrito($id_producto)
    {
        $conexion = (new Connection())->getConection();
        $query = "DELETE FROM carrito WHERE id_producto = :id_producto";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id_producto', $id_producto);
        $stmt->execute();
    }
}
