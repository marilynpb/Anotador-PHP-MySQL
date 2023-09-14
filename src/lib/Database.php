<?php

namespace Gmari\Notas\lib;

use PDO;
use PDOException;

class Database{

    private string $host;
    private string $db;
    private string $user;
    private string $password;
    private string $charset;

    public function __construct(){
        $this->host = 'localhost';
        $this->db = 'notas';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }

    /* Coneccion DB */
    public function connect(){
        try{
            $connection = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                pdo::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        }
        catch(PDOException $th){
            throw $th;
        }
    }
}