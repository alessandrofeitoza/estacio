let ladoA = prompt('Informe o lado A');
let ladoB = prompt('Informe o lado B');
let ladoC = prompt('Informe o lado C');


if (ladoA === ladoB && ladoB === ladoC) {
    alert("triangulo EQUILATERO");
} else if (ladoA !== ladoB && ladoB !== ladoC && ladoC !== ladoA) {
    alert('triangulo Escaleno');
} else {
    alert('triangulo Isoceles');
}