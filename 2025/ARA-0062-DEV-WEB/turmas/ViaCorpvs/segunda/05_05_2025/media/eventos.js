let notas = [];

let qtdBimestres = prompt('Quantos bimestres?');

for (let i = 1; i <= qtdBimestres; i++){
    let nota = prompt(`Informe a nota do ${i}o Bimestre`);
    
    nota = parseFloat(nota);
    
    notas.push(nota);
}



function calcularMedia(notas) {
    let total = 0;
    for (let i = 0; i < notas.length; i++) {
        total += notas[i];
    }

    return total / notas.length;
}

let r = calcularMedia(notas);

document.write(`Media: ${r}`);
