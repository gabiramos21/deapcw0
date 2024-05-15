// Aguarda o carregamento completo do DOM antes de executar o código
document.addEventListener("DOMContentLoaded", function() {
    // Obtém o formulário de login
    const loginForm = document.getElementById("loginForm");

    // Adiciona um ouvinte de evento para o evento de envio do formulário
    loginForm.addEventListener("submit", function(event) {
        // Impede o comportamento padrão de envio do formulário
        event.preventDefault();

        // Obtém os valores dos campos de entrada do formulário
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Aqui você pode adicionar lógica para processar o login
        // Por exemplo, enviar os dados para um servidor e verificar as credenciais

        // Exibe uma mensagem de alerta com os valores do usuário e da senha
        alert("Nome de Utilizador: " + username + "\nPassword: " + password);
    });
});

