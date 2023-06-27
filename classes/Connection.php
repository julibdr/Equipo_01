<?php
namespace classes;
use PDO;

class Connection {
    public const DB_SERVER = "localhost";
    public const DB_USER = "root";
    public const DB_PASS = "";
    public const DB_NAME = "celularia";

    public const DB_DNS = "mysql:host=" . Connection::DB_SERVER . ";dbname=" . Connection::DB_NAME . ";charset=utf8mb4";
    protected PDO $db;

    public function __construct() {
        try {
            $this->db = new PDO(Connection::DB_DNS, Connection::DB_USER, Connection::DB_PASS);
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }

    public function getConection(): PDO {
        return $this->db;
    }
}

