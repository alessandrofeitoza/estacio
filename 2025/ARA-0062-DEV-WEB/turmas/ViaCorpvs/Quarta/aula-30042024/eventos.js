// funcao sem retorno e sem parametro
function welcome() {
    alert('Bem vindo');
}

//funcao com parametro, sem retorno
// function welcome(nome) {
//     alert(`Bem vindo(a) ${nome}`);
// }

function welcome(nome) {
    return `Bem vindo(a) ${nome}`;
}

alert(welcome("Maria"));

document.title = welcome("Jose");

document.write(welcome("Joao"));
