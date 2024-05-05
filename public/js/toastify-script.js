// toastify-script.js

function showSuccessToast(message) {
    Toastify({
        text: message,
        duration: 3000, // 3 segundos
        close: true,
        gravity: 'top', // Posição do toast
        position: 'right', // Posição do toast
        backgroundColor: "rgb(45, 212, 129)", // Verde azulado

    }).showToast();
}

function showErrorToast(message) {
    Toastify({
        text: message,
        duration: 3000, // 3 segundos
        close: true,
        gravity: 'top', // Posição do toast
        position: 'right', // Posição do toast
        backgroundColor: "#FF6347", // Cor de fundo
    }).showToast();
}

function showWarningToast(message) {
    Toastify({
        text: message,
        duration: 3000, // 3 segundos
        close: true,
        gravity: 'top', // Posição do toast
        position: 'right', // Posição do toast
        backgroundColor: "#FFD700", // Cor de fundo
    }).showToast();
}

// Adicione outras funções para outros tipos de toast, se necessário
