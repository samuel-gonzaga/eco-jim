<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/login-register/app/views/css/login.css">
    <title>Login</title>
</head>
<body>
<main>
    <section>
        <h2>Faça Login!</h2>
        <form action="login" method="POST">
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <p>Ainda não possui login? <a href="register">Registre-se!</a></p>

        <?php if (isset($errors) && !empty($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li style="color: red;"><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</main>
</body>
</html>
