window.addEventListener('modal-opened', () => {
    document.body.classList.add('overflow-hidden');
});

window.addEventListener('modal-closed', () => {
    document.body.classList.remove('overflow-hidden');
});