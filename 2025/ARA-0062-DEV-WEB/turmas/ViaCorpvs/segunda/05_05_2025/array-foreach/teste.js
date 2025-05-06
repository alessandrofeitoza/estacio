let frutas = [
    'uva',
    'banana',
    'laranja',
    'abacaxi',
];


frutas.forEach(function (valor) {
    console.log('Fruta: ' + valor.toUpperCase());
});

frutas.forEach((valor) => console.log('Fruta: ' + valor.toUpperCase()));

// Funções de array
// map, reduce, filter


document.getElementById('nome').addEventListener('click', () => {
    
})


/* Forma mais arcaica
for (let i = 0; i < frutas.length; i++) {
    frutas[i].toUpperCase(); //UVA
} 
*/
