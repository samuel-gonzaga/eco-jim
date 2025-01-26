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
}
