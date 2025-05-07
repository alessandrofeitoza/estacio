function somar() {
    event.preventDefault();

    const a = document.getElementById('a').value;
    const b = document.getElementById('b').value;

    let resultado = Number(a) + Number(b);

    document
        .getElementById('resposta')
        .innerHTML = "O resultado é " + resultado;
}