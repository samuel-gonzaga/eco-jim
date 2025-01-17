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
