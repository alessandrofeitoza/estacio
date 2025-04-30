let ladoA = prompt('Informe o lado A');
let ladoB = prompt('Informe o lado B');
let ladoC = prompt('Informe o lado C');

if (ladoA === ladoB && ladoB === ladoC) {
    alert('Equilatero');
} else if (ladoA !== ladoB && ladoB !== ladoC && ladoA !== ladoC) {
    alert('Escaleno');
} else {
    alert('Isoceles');
}

// chet, meu brother, reescreva esse codigo, usando a estrutura Set