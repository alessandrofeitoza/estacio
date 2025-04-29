let nome = prompt('Qual seu nome?');
let idade = prompt(nome + ', qual a sua idade?');

idade = parseInt(idade);

if (isNaN(idade) === true || idade < 0) {
    alert('Idade Invalida');
    throw('Idade Invalida');
}

if (idade < 18) {
    alert('Esse site é apenas para maiores');
}

if (idade <= 12) {
    alert('Criança');
} else {
    // adol, adulto, idos
    if (idade < 18) {
        alert('Adolescente');
    } else {
        if (idade < 60) {
            alert('Adulto')
        } else {
            alert('Idoso');
        }
    }
}

if (idade <= 12) {
    alert('Criança');
} else if (idade < 18) {
    alert('Adolescente');
} else if (idade < 60) {
    alert('Adulto');
} else {
    alert('Idoso');
}


// Ex01:
/*
    0 a 12: Criança
    13 a 17: Adolescente
    18 a 59: Adulto
    60+ : Idoso
*/