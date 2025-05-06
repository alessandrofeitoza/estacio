let peso = prompt("Informe seu peso"); //retorna algo pra dentro da variavel
let altura = prompt("Informe sua Altura");

function calcularIMC (p, a) {
    return p / (a * a);
}
// const imc = (p, a) => p / (a * a);

let resultado = calcularIMC(peso, altura);

alert(`IMC: ${resultado}`);












