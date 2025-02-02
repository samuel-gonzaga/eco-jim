<?php

class LoginController extends Controller
{
    public function validarLogin($dados)
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($dados['email']) ?? '';
            $password = trim($dados['password']) ?? '';

            try {
                Validator::required($email, 'E-Mail');
                Validator::email($email);
                Validator::required($password, 'Senha');


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
                } else {
                    $errors[] = 'Usuário não encontrado';
                }

            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }
        }

        return $errors;
    }
}