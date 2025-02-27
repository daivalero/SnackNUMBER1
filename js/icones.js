document.getElementById("login-icon").addEventListener("click", function() {
    document.getElementById("login-modal").classList.add("show");
});

// Fechar a modal clicando fora dela
window.addEventListener("click", function(event) {
    if (event.target === document.getElementById("login-modal")) {
        document.getElementById("login-modal").classList.remove("show");
    }
});
