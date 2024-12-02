<?php
class Config{
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=gestionimmobiliere';
        $user = "root";
        $pwd = "";
        $this->pdo = new PDO($dsn,$user,$pwd);
    }

    /**
     * Get the value of pdo
     */
    public function getConfig()
    {
        return $this->pdo;
    }
}