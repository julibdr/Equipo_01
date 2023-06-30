<?php
namespace classes;

    class registroUsuario
{

    public function regUser(string $email, string $password) {
        try{
            $user = (new Usuario())->getUserByEmail($email);
            if(!$user) return false;
            $registroUser = ($user->getPassword() == $password);
            $_SESSION["registroUser"] = $registroUser;
            return $registroUser;
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        return false;
    }

    public function checkLogin() {
        return true;
    }

    }