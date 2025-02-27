const openModal = document.getElementById('openModal');
const closeModal = document.getElementById('closeModal');
const formModal = document.getElementById('formModal');

openModal.addEventListener('click', () => {
    formModal.style.display = 'flex';
});

// Fecha o modal ao clicar no "X"
closeModal.addEventListener('click', () => {
    formModal.style.display = 'none';
});

// Fecha o modal ao clicar fora do conteúdo
window.addEventListener('click', (e) => {
    if (e.target === formModal) {
        formModal.style.display = 'none';
    }
});
