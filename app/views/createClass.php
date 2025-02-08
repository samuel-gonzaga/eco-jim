<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/eco-jim/app/views/css/base.css">
    <title>Criar sala</title>
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 50%;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        label {
            display: flex;
            justify-content: flex-start;
            margin-top: 30px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
<?php include "templates/header.php"?>

    <main>
        <section class="form-container">
            <h1>Crie uma nova turma</h1>
            <form method="post" action="criar_sala">
                <label for="turma">Nome da turma</label>
                <input name="turma" placeholder="Ex.: 9º Ano A" type="text" required>
                <button type="submit">Criar</button>
            </form>
        </section>

    </main>

    <?php include "templates/footer.php"?>
</body>
</html>