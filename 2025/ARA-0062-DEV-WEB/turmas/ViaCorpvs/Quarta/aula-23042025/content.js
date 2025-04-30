let nome = prompt('Qual seu nome?');

let idade = prompt(`Oi ${nome}, qual sua idade`);

idade = Number(idade);

if (idade >= 18) {
    alert('Bem vindo ao site');
} else {
    alert('Esse site é proibido para menores');
}


for (let i = 0; i <= 10; i++) {
    document.write('ó o pente! <br>');
}
