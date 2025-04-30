
function calcularIMC(altura, peso) {
    return peso / (altura * altura);
}

let pesoDoUsuario = parseFloat(
    prompt('Peso?')
);
let alturaDoUsuario = parseFloat(
    prompt('Altura?')
);

document.write(
    calcularIMC(alturaDoUsuario, pesoDoUsuario)
);