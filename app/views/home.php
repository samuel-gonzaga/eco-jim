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

<main class="container" id="cardContainer">
    <button class="fab" id="fab" aria-label="Adicionar novo card">+</button>

    <dialog id="modal" aria-labelledby="modalTitle">
        <h2 id="modalTitle">Adicionar Novo Card</h2>
        <button class="x" aria-label="Fechar modal" onclick="modal.close();">❌</button>
        <input type="text" id="cardTitle" placeholder="Título do card" />
        <button class="primary" id="addCard">Adicionar</button>
    </dialog>

    <!-- Template para cards -->
    <template id="cardTemplate">
        <section class="card">
            <h1 class="card-title"></h1>
            <p class="card-description"></p>
            <button class="expand-btn">Ver Detalhes</button>
            <div class="detalhes" style="display: none;">
                <ul class="details-list"></ul>
            </div>
        </section>
    </template>
</main>

<?php include "templates/footer.php" ?>
<script src="/eco-jim/app/views/js/script.js"></script>
</body>
</html>
