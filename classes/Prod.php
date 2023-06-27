<?php
namespace classes;
use PDO;
require_once 'Connection.php';
class Prod
{
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $precio;
    protected $imagen;
    protected $categoria;
    protected $pantalla;
    protected $sistemaoperativo;

    public function getAll(): array {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM productos";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProducto()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getPantalla()
    {
        return $this->pantalla;
    }

    public function getSistema()
    {
        return $this->sistemaoperativo;
    }
}
