// Seleciona todas as receitas da página
const receitas = document.querySelectorAll('.recipe');

// Adiciona os event listeners para cada receita
receitas.forEach(receita => {
    // Quando o mouse passar por cima
    receita.addEventListener('mouseenter', () => {
        receita.style.transform = 'scale(1.05)';
        receita.style.backgroundColor = '#ffe600';
        receita.style.transition = 'all 0.3s ease';
    });

    // Quando o mouse sair
    receita.addEventListener('mouseleave', () => {
        receita.style.transform = 'scale(1)';
        receita.style.backgroundColor = '#fff';
        receita.style.transition = 'all 0.3s ease';
    });
});