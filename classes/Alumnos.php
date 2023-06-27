<?php
namespace classes;
use PDO;
require_once 'Connection.php';
class Alumnos 
{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $imagen;
    protected $correo;
    protected $redes;

    public function getAll(): array {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM alumnos";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    //get
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function getRedes(){
        return $this->redes;
    }
     public function getEdad(){
        return $this->edad;
    }
}