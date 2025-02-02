<?php

class LoginController extends Controller
{
    public function validarLogin($dados)
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($dados['email']) ?? '';
            $password = trim($dados['password']) ?? '';



            if (empty($errors)) {
                try {
                    $userModel = new User();
                    $user = $userModel->retornaInfosUser($email);

                    if ($user) {
                        if (password_verify($password, $user['password'])) {
                            setSessionValue('user_id', $user['id']);
                            setSessionValue('username', $user['name']);
                            redirect('home');
                            exit;

                        } else {
                            $errors[] = "Senha incorreta.";
                        }
                    }
                } catch (Exception $e) {
                    $errors[] = "Erro ao realizar login: " . $e->getMessage();
                }
            }
        }
        return $errors;
    }
}