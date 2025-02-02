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

<main class="container">

    <!-- Cards -->
    <div id="cardsContainer"></div>
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

    <!-- Botão e modal -->
    <?php if(isLoggedIn()) {?>
    <button class="fab" id="fab" onclick="openModal()" >+</button>

    <dialog id="modal">
        <button id="btn-turma" onclick="btnClicked()">Turma</button>
        <button id="btn-reees" onclick="btnClicked()">REEEs</button>
        <section id="classContainer">
            <h2 id="turmaTitle">Adicionar Nova turma</h2>
            <button class="x" aria-label="Fechar modal" onclick="modal.close();">❌</button>

            <form action="home" method="POST">
                <input name="class" type="text" class="cardTitle" placeholder="Nome da turma" />
                <button type="submit" class="addCard">Adicionar</button>
            </form>

        </section>
        <section id="reeesContainer" style="display: none">
            <h2 id="reeesTitle">Adicionar lixo (Kg)</h2>
            <button class="x" aria-label="Fechar modal" onclick="modal.close();">❌</button>

<!--            <form action="post">-->
<!--                <input type="number">-->
<!--                <input type="datetime-local" id="cardTitle"/>-->
<!--                <button class="addCard">Adicionar</button>-->
<!--            </form>-->

        </section>
    </dialog>


    <?php }?>

    <section>
        <?php if(isLoggedIn()) {?>
            <h1>Seja bem vindo! <?= getSessionValue('username') ?> </h1>
        <?php } ?>
    </section>
</main>

<?php include "templates/footer.php" ?>
<script src="/eco-jim/app/views/js/script.js"></script>
<script>
    const turmas = <?php echo json_encode($turmas); ?>;
    const cardsContainer = document.getElementById('cardsContainer');
    const cardTemplate = document.getElementById('cardTemplate');
    function createCard(turma) {
        const cardClone = cardTemplate.content.cloneNode(true);
        cardClone.querySelector('.card-title').textContent = turma.nome;
        cardsContainer.appendChild(cardClone);
    }

    turmas.forEach(turma => {
        createCard(turma);
    });
</script>
</body>
</html>
