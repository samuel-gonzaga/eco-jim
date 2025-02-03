function openModal() {
    const fab = document.getElementById('fab');
    const modal = document.getElementById('modal');
    // Abrir modal
    fab.addEventListener('click', () => modal.showModal());
}

function changeInput() {
    const turma = document.getElementById('btn-turma');
    const reees = document.getElementById('btn-reees');
    const classContainer = document.getElementById('classContainer');
    const reeesContainer = document.getElementById('reeesContainer');

    if(turma) {
        classContainer.style.display = 'block';
        reeesContainer.style.display = 'none';
    } if (reees) {
        classContainer.style.display = 'none';
        reeesContainer.style.display = 'block';
    }
}

function btnClicked() {
    let value = true
}

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("expand-btn");
    const detalhes = document.getElementById("detalhes");

    button.addEventListener("click", function () {
        if (detalhes.style.display === "none" || detalhes.style.display === "") {
            detalhes.style.display = "block";
            button.textContent = "Ocultar Detalhes";
        } else {
            detalhes.style.display = "none";
            button.textContent = "Ver Detalhes";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const turmaForm = document.getElementById("turmaForm");
    const cardsContainer = document.getElementById("cardsContainer");
    const cardTemplate = document.getElementById("cardTemplate");
    const modal = document.getElementById("modal");

    turmaForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Evita recarregar a página

        let formData = new FormData(turmaForm);

        fetch("/../../controllers/ProcessaTurma.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Adiciona a nova turma à lista de cards sem recarregar a página
                    createCard(data.turma);

                    // Fecha o modal e limpa o input
                    modal.close();
                    turmaForm.reset();
                } else {
                    alert("Erro ao adicionar turma.");
                }
            })
            .catch(error => console.error("Erro:", error));
    });

    function createCard(turma) {
        const cardClone = cardTemplate.content.cloneNode(true);
        cardClone.querySelector(".card-title").textContent = turma.nome;
        cardsContainer.appendChild(cardClone);
    }
});
