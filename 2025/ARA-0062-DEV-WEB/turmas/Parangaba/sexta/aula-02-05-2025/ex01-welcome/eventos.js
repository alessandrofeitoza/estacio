// funcao sem parametro e sem retorno
// function welcome() {
//     document.write('Bem vinde');
// }


// funcao com parametro(s)
function welcome(nome) {
    document.write(`Bem vinde ${nome} <br>`);
}

let n = prompt("Qual seu nome?");
welcome(n);


