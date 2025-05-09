let quantidade = 0;

function adicionar() {
    quantidade++;
    atualizarQuantidade();
}

function remover() {
    if (quantidade <= 0) {
        return;
    }

    quantidade--;
    atualizarQuantidade();
}

function atualizarQuantidade() {
    document
        .getElementById('total')
        .innerText = quantidade;
}