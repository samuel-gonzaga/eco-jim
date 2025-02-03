<?php
header("Content-Type: application/json");
require "../../app/config/config.php";
require "../../app/models/Model.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome_turma = trim($_POST["class"]);

    if (!empty($nome_turma)) {
        $sql = "INSERT INTO turmas (nome) VALUES (:nome)";
        $modeel = new Model();
        $stmt = $model->executeQuery($sql, $nome_turma);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "turma" => ["nome" => $nome_turma]]);
        } else {
            echo json_encode(["success" => false]);
        }
    } else {
        echo json_encode(["success" => false]);
    }
}

