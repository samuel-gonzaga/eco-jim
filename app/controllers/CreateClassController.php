<?php

class CreateClassController extends Controller
{
    private $turmaModel;

    public function __construct() {
        $this->turmaModel = new Turmas();
    }

    public function createClass($dados)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $turma = trim($dados['turma']) ?? '';
            $this->turmaModel->insertClass($turma);
            
        }
    }
}