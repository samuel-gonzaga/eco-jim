<?php
class RegisterController extends Controller
{
    public function validarRegistro($dados)
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($dados['name'] ?? '');
            $email = trim($dados['email'] ?? '');
            $password = trim($dados['password'] ?? '');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            try {
                Validator::minLength($password, 6);

                $userModel = new User();
                $result = $userModel->registerUser($username, $email, $hashedPassword);
                if ($result && $result->rowCount() > 0) {


                    $user = $userModel->retornaInfosUser($email);

                    if ($user) {
                        setSessionValue('user_id', $user['id']);
                        setSessionValue('username', $user['name']);
                        redirect('home');
                    }
                    exit;
                } else {
                    $errors[] = "Erro ao registrar um usuário";
                }
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }

        }
        return $errors;
    }
}