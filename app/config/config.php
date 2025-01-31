<?php

//$host = 'localhost';
//$dbname = 'ecojim';
//$username = 'root';
//$password = '';
//
//try {
//    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch (PDOException $e) {
//    die("Erro na conexão com o banco de dados: " . $e->getMessage());
//}

class Database {
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $dbname = 'ecojim';
    private $username = 'root';
    private $password = '';

    private function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host}; dbname={$this->dbname}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erro de conexão: ' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }

    private function __clone() {}
}