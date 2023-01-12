<?php

namespace App\Database;

use \PDO;
use PDOException;

class Database
{
    const HOST = 'localhost';
    const NAME = 'dev_cursos_php';
    const USER = 'root';
    const PASS = '';
    
    public $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
        } catch (\PDOException $e) {
            die('Erro ao conectar com banco de dados! '.$e->getMessage());
        }
    }
    
    public function execute($query,$params = [])
    {
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
}