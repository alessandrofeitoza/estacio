let ladoA = prompt('Informe o lado A');
let ladoB = prompt('Informe o lado B');
let ladoC = prompt('Informe o lado C');

let lados = new Set([
    ladoA,
    ladoB,
    ladoC,
]);

let resultado = {
    1: 'Equilatero',
    2: 'Isoceles',
    3: 'Escaleno',
};

alert(resultado[lados.size]);