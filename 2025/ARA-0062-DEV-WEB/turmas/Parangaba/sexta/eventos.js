const INPUT_EMAIL = document.getElementById('email');
const INPUT_SENHA = document.getElementById('senha');

function validar() {
    event.preventDefault();

    if (INPUT_EMAIL.value === '') {
        INPUT_EMAIL.style.border = '1px solid red';
    }

    if (INPUT_SENHA.value === '') {
        INPUT_SENHA.style.border = '1px solid red';
    }
}