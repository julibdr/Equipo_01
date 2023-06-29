<?php

namespace classes;
use PDO;

class Usuario
{
protected $id;
protected $email;
protected $password;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getUserByEmail($email) {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute(
            [
                'email' => $email
            ]
        );
        $result =  $stmt->fetch();
        if(!$result) return null;
        return $result;
    }

}