const expandButtons = document.querySelectorAll('.expand-btn');

expandButtons.forEach(button => {
    button.addEventListener('click', () => {
        const detalhes = button.nextElementSibling;

        if (detalhes.style.display === 'none') {
            detalhes.style.display = 'block';
            button.textContent = 'Ocultar Detalhes';
        } else {
            detalhes.style.display = 'none';
            button.textContent = 'Ver Detalhes';
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const cardsContainer = document.getElementById('cardsContainer');
    const cardTemplate = document.getElementById('cardTemplate');

    // Função para criar e adicionar um card
    function createCard(turma) {
        const cardClone = cardTemplate.content.cloneNode(true);
        cardClone.querySelector('.card-title').textContent = turma.nome; // Substitua "nome" com o campo correto
        cardsContainer.appendChild(cardClone);
    }

    // Criar os cards com as turmas recebidas do PHP
    turmas.forEach(turma => {
        createCard(turma);
    });
});
