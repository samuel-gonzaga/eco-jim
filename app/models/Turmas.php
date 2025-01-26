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

}