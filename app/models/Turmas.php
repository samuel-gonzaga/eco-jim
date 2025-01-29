<?php

class Turmas
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function retornaInfosTurmas()
    {
        $query = 'SELECT * FROM turmas';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertClass($className)
    {
        try {
            $query = 'INSERT INTO `turmas`(`nome`) VALUES (:name)';
            $stmt = $this->db->prepare($query);
            return $stmt->execute([
                ':name' => $className,
            ]);
        } catch (Exception $e) {
            if ($e->getCode() === '23000') {
                return "Sala já foi cadastrada";
            }
            error_log("Erro de validação: " . $e->getMessage());
            return $e->getMessage();
        }

    }

}