<?php
require_once __DIR__ . '/Model.php';

class Turmas extends Model
{
    public function getClass()
    {
        $query = 'SELECT * FROM turmas';
        $stmt = $this->executeQuery($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertClass($className)
    {
        try {
            $query = 'INSERT INTO `turmas`(`nome`) VALUES (:name)';
            return $this->executeQuery($query, [':name' => $className]);
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                return "Sala já foi cadastrada";
            }
            error_log("Erro de validação: " . $e->getMessage());
            return $e->getMessage();
        }
    }

}