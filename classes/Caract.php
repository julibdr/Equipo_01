<?php
namespace classes;
use PDO;
require_once 'Connection.php';
class Caract
{
    protected $id;
    protected $memoria;
    protected $producto_id; //el referenciado
    
    public function getAll(): array {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM caracteristicas";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
   
    public function getById($producto_id)
    {
        $conexion = (new Connection())->getConection();
        $sql = "SELECT memoria FROM caracteristicas WHERE producto_id = :productoId";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':productoId', $producto_id);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);

        return $resultados;
    }
}