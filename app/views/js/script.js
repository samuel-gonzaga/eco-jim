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

// const expandButtons = document.querySelectorAll('.expand-btn');
// expandButtons.forEach(button => {
//     button.addEventListener('click', () => {
//         const detalhes = button.nextElementSibling;
//
//         if (detalhes.style.display === 'none') {
//             detalhes.style.display = 'block';
//             button.textContent = 'Ocultar Detalhes';
//         } else {
//             detalhes.style.display = 'none';
//             button.textContent = 'Ver Detalhes';
//         }
//     });
// });


