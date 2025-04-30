// Receber 04 notas, 
// e retornar a media

// 8, 9, 7, 8 = 8

function calcularMedia(n1, n2, n3, n4) {
    return (n1 + n2 + n3 + n4) / 4;
}

function mediaArray(lista) {
    let total = 0;

    for (let i = 0; i < lista.length; i++) {
        total += lista[i];
    }

    return total / lista.length;
}


let quantidade = Number(
    prompt('Quantas notas vc quer?')
);

let notas = [];
for (let i = 0; i < quantidade; i++) {
    let cadaNota = prompt(
        'Informa a nota'+(i+1)
    );
    
    notas.push(
        Number(cadaNota)    
    );
}

let media = mediaArray(notas)

document.write('Media: '+media);


if (media >= 6) {
    alert('Aprovado');
} else {
    alert('Reprovado');
}



