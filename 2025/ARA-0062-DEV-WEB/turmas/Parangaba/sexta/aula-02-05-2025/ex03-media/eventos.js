/*
- uma pessoa vai chegar no site
- ela vai informar quantas notas ela tem (X)
- o programa vai pedir as X notas
- ela vai informar X Notas
- o programa vai calcular a media 
- o programa vai mostrar o resultado 
*/


function calcularMedia(notas) {
    if (typeof notas !== "object") {
        throw("Notas precisa ser um array");
    }

    let total = 0;

    for (let i = 0; i < notas.length; i++) {
        total += notas[i];
    } // reduce

    return total / notas.length;
}

let notas = [];
let quantidade = prompt("Quantas Notas?");

for (let i = 1; i <= quantidade; i++) {
    notas.push(
        Number(prompt(`Informe a nota ${i}`))
    )
}

let media = calcularMedia(notas);

document.write(`Sua media é ${media}`);