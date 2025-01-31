<?php

class Model
{
    protected $db;

    public function __construct ()
    {
        $this->db = Database::getInstance();
    }

    protected function executeQuery($query, $params = [])
    {
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Erro na query: " . $e->getMessage());
        }
    }
}