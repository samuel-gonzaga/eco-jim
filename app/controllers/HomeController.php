<?php

class HomeController extends Controller {
    private $turmaModel;

    public function __construct() {
        $this->turmaModel = new Turmas();
    }

    public function getTurmas() {
        return $this->turmaModel->getClass();
    }

    public function showHome() {
        $turmas = $this->getTurmas();
        require_once __DIR__ . '/../../app/views/home.php';
    }

    public function createClass($data) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $info = trim($data['class']) ?? '';
            try {
                $this->turmaModel->insertClass($info);
            } catch (Exception $e) {
                echo $e;
            }
        }
    }
}
