<?php
require_once __DIR__ . '/Model.php';
class User extends Model {
    public function registerUser($name, $email, $hashedPassword)
    {
        try {
            Validator::required($name, 'Username');
            Validator::minLength($name, 3);

            Validator::required($email, 'E-Mail');
            Validator::email($email);
            $role = 'admin';
            date_default_timezone_set("America/Sao_Paulo");
            $data = date('Y-m-d H:i:s');

            $query = "INSERT INTO users (name, email, password, role, created_at) VALUES (?, ?, ?, ?, ?)";
            return $this->executeQuery($query, [$name, $email, $hashedPassword, $role, $data]);
        } catch (Exception $exception) {
            if ($exception->getCode() === '23000') {
                return "E-mail já está cadastrado.";
            }
            error_log("Erro de validação: " . $exception->getMessage());
            return $exception->getMessage();
        }
    }

    public function retornaInfosUser($email)
    {
        $query = 'SELECT id, name, email, password FROM users WHERE email = :email';
        $stmt = $this->executeQuery($query, ['email'=>$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}