<?php include 'partes/head.php'; ?>
<?php include 'partes/menu.php'; ?>

<?php
    $produtos = [
        [
            'id' => 1,
            'nome' => 'Heineken',
            'imagem' => 'https://carrefourbrfood.vtexassets.com/arquivos/ids/97519658/cachaca-ypioca-conta-gota-ouro-965ml-2.jpg?v=638100855886670000',
            'preco' => '',
            'quantidade' => '',
            'descricao' => '',
        ],
    ];
?> 
        
<section class="card card-body">
    <div class="row">
        <div class="col">
            <h3>Produtos</h3>
        </div>
        <div class="col text-end">
            <button 
                data-bs-toggle="offcanvas" 
                data-bs-target="#novoCliente" 
                class="btn btn-outline-dark">Novo</button>
        </div>
    </div>
            
        <div class="offcanvas offcanvas-end" tabindex="-1" id="novoCliente" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cadastrar Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="">
            <label for="nome">Nome</label>
            <input 
                id="nome" 
                type="text" 
                placeholder="Digite aqui"
                class="form-control mb-3">

            <label for="quantidade">Quantidade</label>
            <input 
                id="quantidade" 
                type="number" 
                placeholder="Ex: (85) 9 1234-1234"
                class="form-control mb-3">

            <label for="email">Email</label>
            <input 
                id="email" 
                type="text" 
                placeholder="exemplo@email.com"
                class="form-control mb-3">

            <label for="cidade">Cidade</label>
            <select id="cidade" class="form-select mb-3">
                <option selected>-- Selecione --</option>
                <option>Fortaleza</option>
                <option>Maracanau</option>
                <option>Caucaia</option>
            </select>

            <button class="btn btn-primary w-100    ">PRONTO</button>
            </form>
        </div>
        </div>



    <table class="mt-3 table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ypioca</td>
                <td>Destilados</td>
                <td> 
                    <img width="70px" src="https://carrefourbrfood.vtexassets.com/arquivos/ids/97519658/cachaca-ypioca-conta-gota-ouro-965ml-2.jpg?v=638100855886670000"> 
                </td>
                <td>Prata, 960ml</td>
                <td>R$ 10.90</td>
                <td>18</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</section>


<?php include 'partes/footer.php'; ?>
