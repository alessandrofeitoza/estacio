let nome = prompt('Oi, qual seu nome?');

let idade = Number(
    prompt(nome + '. Qual sua idade?')
);

if (idade < 18) {
    alert('Site proibido para menores');
} else {
    alert('Bem vinde');
}