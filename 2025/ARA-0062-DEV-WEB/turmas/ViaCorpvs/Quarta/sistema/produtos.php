<?php 
    include 'views/head.php'; 
    include 'views/navbar.php'; 
?>

<section class="card card-body">
    <div class="d-flex justify-content-between">
        <h1>Produtos</h1>

        <span>
            <a href="#cadastro" data-bs-toggle="offcanvas" class="btn btn-success">Novo Produto</a>
        </span>
    </div>

        
        <div class="offcanvas offcanvas-end" tabindex="-1" id="cadastro" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cadastro de Produto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="">
            <label for="nome">Nome</label>
            <input id="nome" class="form-control mb-3" 
                type="text" required
                placeholder="Digite aqui">

            <label for="descricao">Descrição</label>
            <textarea id="descricao" class="form-control mb-3" 
                placeholder="Digite aqui"></textarea>

            <label for="quantidade">Quantidade</label>
            <input id="quantidade" class="form-control mb-3" 
                type="number" min="0" required
                placeholder="Digite aqui">
                
            <label for="tipo">Tipo</label>
            <select id="tipo" class="form-select mb-3">
                <option>-- Selecione --</option>
                <option>Cerveja</option>
                <option>Destilado</option>
                <option>Doutrolado</option>
            </select>
            
            <label for="preco">Preço</label>
            <input id="preco" class="form-control mb-3" 
                placeholder="Digite aqui"
                type="number" min="0" step="0.01">

            <label for="imagem">Imagem</label>
            <input id="imagem" class="form-control mb-3" 
                placeholder="Digite aqui"
                type="url">

                

            <button class="btn btn-success w-100">
                PRONTO
            </button>
            </form>
        </div>
        </div>
    
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Tipo</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ypioca</td>
                <td>Garrafa, Prata - 960ml</td>
                <td>10</td>
                <td>Destilados</td>
                <td>R$ 19.80</td>
                <td><img src="https://carrefourbrfood.vtexassets.com/arquivos/ids/97519658/cachaca-ypioca-conta-gota-ouro-965ml-2.jpg?v=638100855886670000" width="60px" alt=""></td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>

        </tbody>

    </table>
</section>

<?php include 'views/footer.php'; ?>