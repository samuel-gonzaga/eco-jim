<?php

class HomeController extends Controller
{
    public function getTurmas()
    {
        $this->turmaModel = new Turmas($this->db);
        return $this->turmaModel->retornaInfosTurmas();
    }

    public function showHome()
    {
        $turmas = $this->getTurmas();
        require_once __DIR__ . '/../../app/views/home.php';
    }

    public function createClass($data)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $className = trim($data['class']) ?? '';
            try {
                $homeModel = new Turmas($this->db);
                $homeModel->insertClass($className);
            } catch (Exception $e) {
                echo $e;
            }
        }
    }
}
