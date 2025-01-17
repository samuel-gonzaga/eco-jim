// Seleciona o botão flutuante
const floatingButton = document.querySelector('.floating-button');

if (floatingButton) {
    // Atualiza a posição do botão com base no scroll
    window.addEventListener('scroll', () => {
        const footer = document.querySelector('.footer'); // Seleciona o rodapé
        if (footer) {
            const footerRect = footer.getBoundingClientRect(); // Posição do rodapé
            const windowHeight = window.innerHeight; // Altura da janela

            if (footerRect.top < windowHeight) {
                // Se o rodapé estiver visível, ajusta a posição do botão
                floatingButton.style.bottom = `${windowHeight - footerRect.top + 20}px`;
            } else {
                // Caso contrário, mantém o botão fixo no canto inferior
                floatingButton.style.bottom = '20px';
            }
        }
    });
}