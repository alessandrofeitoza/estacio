// function welcome(nome) {
//     return `v1: Bem vinde ${nome}`;
// }

// funcao anonima
// const welcome = function (nome) {
//     return `v2: Bem vinde ${nome}`;
// }

// arrow function
// const welcome = (nome) => {
//     let resultado = `Bem vinde`;
//     return `v3: ${resultado} ${nome}`;
// }; 

// arrow function
const welcome = (nome) => `v4: Bem vinde ${nome}`;

let r = welcome('Chiquim'); //Bem vinde Chiquim

document.write(r);