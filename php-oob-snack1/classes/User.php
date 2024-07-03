<?php

class User
{
    // ? Dichiarazione di visibilità . Variabili di istanza
    private $userId;
    private $userPassword;
    
    public function __construct($userId , $userPassword)
    {
        $this->userId = $userId;
        $this->userPassword = $userPassword;
    }

    public function getId()
    {
        return $this->userId;
    }

    public function setId($id)
    {
        return $this->userId = $id ;
    }

    public function getPassword()
    {
        return $this->userPassword;
    }

    public function setPassword($password)
    {
        return $this->userPassword = $password ;
    }

}