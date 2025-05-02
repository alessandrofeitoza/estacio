let produto = {
    //o que tem?
    preco: 18.80,
    nome: 'Ypioca',
    quantidade: 10,

    //o que faz?
    adicionar: () => "Cadastrando produto",
    remover: () => {
        return "Removendo produto"
    },
    editar: function() {
        return "Editando produto"
    },
    buscar: function() {}
};

document.write(
    produto.remover()
)





