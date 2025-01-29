<?php

class Database {
    // Propriedades privadas para armazenar as credenciais do banco de dados
    private $host = 'localhost';
    private $dbname = 'ecojim';
    private $username = 'root';
    private $password = '';

    // Método para conectar ao banco de dados
    public function conectar() {
        try {
            // Cria uma instância do PDO para a conexão com o banco de dados
            $db = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );

            // Configura o PDO para lançar exceções em caso de erros
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retorna a conexão para ser utilizada fora da classe
            return $db;
        } catch (PDOException $e) {
            // Em caso de erro, exibe uma mensagem e encerra a execução
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}