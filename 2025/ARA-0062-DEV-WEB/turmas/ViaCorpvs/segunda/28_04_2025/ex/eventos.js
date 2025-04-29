
// 3 lados iguais: EQUILATERO
// 2 lados iguais: ISOCELES
// 3 lados diferentes: ESCALENO

let ladoA = prompt('Informe o lado A');
let ladoB = prompt('Informe o Lado B');
let ladoC = prompt('Informe o Lado C');

if (ladoA < (ladoB + ladoC) ) {
    alert("Triangulo impossivel")
    throw('Erro');
}


if (ladoA === ladoB && ladoB === ladoC) {
    alert("EQUILATERO");
} else if (ladoA !== ladoB && ladoB !== ladoC && ladoC !== ladoA) {
    alert('ESCALENO');
} else {
    alert('ISOCELES');
}
