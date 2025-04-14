const INPUT_EMAIL = document.getElementById('email');
const INPUT_SENHA = document.getElementById('senha');

const ERRO_EMAIL = document.getElementById('erro_email');
const ERRO_SENHA = document.getElementById('erro_senha');

function esconderErroEmail() {
    ERRO_EMAIL.style.display = 'none';
}

function esconderErroSenha() {
    if (INPUT_SENHA.value.length >= 8) {
        INPUT_SENHA.classList.remove('is-invalid');
        INPUT_SENHA.classList.add('is-valid');
    } else {
        INPUT_SENHA.classList.add('is-invalid');
        INPUT_SENHA.classList.remove('is-valid');
    }

    ERRO_SENHA.style.display = 'none';
}

function enviar() {
    //impedir o envio do form
    event.preventDefault();

    if ( INPUT_EMAIL.value === '' ) {
        ERRO_EMAIL.style.display = 'block';
    }

    if ( INPUT_SENHA.value === '' ) {
        ERRO_SENHA.style.display = 'block';
    }


}