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
    const fab = document.getElementById('fab');
    const modal = document.getElementById('modal');
    const addCardButton = document.getElementById('addCard');
    const cardContainer = document.getElementById('cardContainer');
    const cardTemplate = document.getElementById('cardTemplate');

    // Abrir modal
    fab.addEventListener('click', () => modal.showModal());

    // Adicionar novo card
    addCardButton.addEventListener('click', () => {
        const cardTitle = document.getElementById('cardTitle').value.trim();
        if (cardTitle) {
            createCard(cardTitle, 'Lixo coletado: 0kg', []);
            document.getElementById('cardTitle').value = ''; // Limpar input
            modal.close();
        } else {
            alert('O título do card não pode estar vazio.');
        }
    });

    // Função para criar um card
    function createCard(title, description, details) {
        const card = cardTemplate.content.cloneNode(true);
        card.querySelector('.card-title').textContent = title;
        card.querySelector('.card-description').textContent = description;

        const detailsList = card.querySelector('.details-list');
        details.forEach(detail => {
            const li = document.createElement('li');
            li.innerHTML = `<p>${detail.date}:</p> <p>${detail.weight}</p>`;
            detailsList.appendChild(li);
        });

        card.querySelector('.expand-btn').addEventListener('click', function () {
            const detalhes = this.nextElementSibling;
            detalhes.style.display = detalhes.style.display === 'none' ? 'block' : 'none';
        });

        cardContainer.appendChild(card);
    }

    // Exemplo de dados iniciais
    const initialCards = [
        { title: '6º Ano A', description: 'Lixo coletado: 30kgs', details: [{ date: '05/01/2025', weight: '09kg' }, { date: '10/01/2025', weight: '11kg' }] },
        { title: '6º Ano B', description: 'Lixo coletado: 25kgs', details: [{ date: '05/01/2025', weight: '09kg' }, { date: '10/01/2025', weight: '11kg' }] },
        { title: '6º Ano C', description: 'Lixo coletado: 20kgs', details: [{ date: '05/01/2025', weight: '09kg' }, { date: '10/01/2025', weight: '11kg' }] },
    ];

    // Renderizar cards iniciais
    initialCards.forEach(card => createCard(card.title, card.description, card.details));
});
