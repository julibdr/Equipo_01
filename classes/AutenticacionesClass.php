<?php
namespace classes;


class autenticacion
{

    public function logIn(string $email, string $password) {
        try{
            $user = (new Usuario())->getUserByEmail($email);
            if(!$user) return false;
            $loggedIn = ($user->getPassword() == $password);
            $_SESSION["loggedIn"] = $loggedIn;
            return $loggedIn;
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        return false;
    }

    public function checkLogin() {
        return true;
    }

    }
