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
            if (!empty($params)) {
                $stmt->execute($params); // linha 17
            } else {
                $stmt->execute();

            }
            return $stmt;
        } catch (Exception $e) {
            die("Erro na query: " . $e->getMessage());
        }
    }
}