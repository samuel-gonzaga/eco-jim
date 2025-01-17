<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/eco-jim/app/views/css/base.css">
    <link rel="stylesheet" href="/eco-jim/app/views/css/home.css">
    <title>Eco JIM</title>
</head>
<body>
<?php include "templates/header.php"?>

<main>
    <section class="card">
        <h1>6º Ano A</h1>
        <p>Lixo coletado: 30kgs</p>
        <button class="expand-btn">Ver Detalhes</button>

        <div class="detalhes" style="display: none;">
            <ul>
                <li>06/01/2025: 04kg</li>
                <li>07/01/2025: 15kg</li>
                <li>09/01/2025: 06kg</li>
            </ul>
        </div>
    </section>

    <section class="card">
        <h1>6º Ano B</h1>
        <p>Lixo coletado: 25kgs</p>
        <button class="expand-btn">Ver Detalhes</button>

        <div class="detalhes" style="display: none;">
            <ul>
                <li>05/01/2025: 20kg</li>
                <li>10/01/2025: 05kg</li>
            </ul>
        </div>
    </section>

    <section class="card">
        <h1>6º Ano C</h1>
        <p>Lixo coletado: 20kgs</p>
        <button class="expand-btn">Ver Detalhes</button>

        <div class="detalhes" style="display: none;">
            <ul>
                <li>05/01/2025: 09kg</li>
                <li>10/01/2025: 11kg</li>
            </ul>
        </div>
    </section>
<!--    <button class="floating-button">+</button>-->
</main>
<?php include "templates/footer.php"?>
<script src="/eco-jim/app/views/js/script.js"></script>
</body>
</html>
