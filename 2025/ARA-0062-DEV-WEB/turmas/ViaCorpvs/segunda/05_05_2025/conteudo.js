function welcome(nome, cidade) {
    return `Bem vinde ${nome}, lá das bandas de ${cidade}`;
}

document.write(
    "<h1>" + welcome("Chiquim", "Caucaia") + "</h1>"
); 
document.write("<br>");

let result = welcome("Maria", "Quixeramobim");

document.write(`<p style="color: red;">${result}</p>`);