/*
- uma pessoa vai chegar no site
- ela vai informar o peso em Kg (ex: 92)
- ela vai informar a altura em M (ex: 1.64)
- o programa vai calcular o imc peso/(altura*altura) 
- o programa vai mostrar o resultado 
*/

function calcularIMC(peso, altura) {
    return peso / (altura * altura);
}

let p = Number(prompt('Informe o Peso'));
let a = Number(prompt('Informe a altura'));

let resultado = calcularIMC(p, a);

document.write(`Seu IMC é ${resultado}`);