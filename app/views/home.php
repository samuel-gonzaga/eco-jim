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
    <div id="cardsContainer"></div>
    <?php include "templates/cards.php" ?>

</main>

<?php include "templates/footer.php" ?>
<script src="/eco-jim/app/views/js/script.js"></script>
<script>
    const turmas = <?php echo json_encode($turmas); ?>; // Passa os dados das turmas para o JS

    const cardsContainer = document.getElementById('cardsContainer');
    const cardTemplate = document.getElementById('cardTemplate');

    function createCard(turma) {
        const cardClone = cardTemplate.content.cloneNode(true);
        cardClone.querySelector('.card-title').textContent = turma.nome; // Substitua "nome" com o campo correto
        cardsContainer.appendChild(cardClone);
    }

    turmas.forEach(turma => {
        createCard(turma);
    });
</script>
</body>
</html>
