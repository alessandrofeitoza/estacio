<?php include 'views/head.php'; ?>
<?php include 'views/navbar.php'; ?>

<section class="card card-body">
    <div class="d-flex justify-content-between">
        <h1>Clientes</h1>

        <span>
            <a href="#cadastro" data-bs-toggle="offcanvas" class="btn btn-primary">Novo Cliente</a>
        </span>
    </div>

        
        <div class="offcanvas offcanvas-end" tabindex="-1" id="cadastro" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cadastro de Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="">
            <label for="nome">Nome</label>
            <input id="nome" class="form-control mb-3" 
                type="text" required
                placeholder="Digite aqui">

            <label for="email">Email</label>
            <input id="email" class="form-control mb-3" 
                type="email" required
                placeholder="Digite aqui">
                
            <label for="telefone">Telefone</label>
            <input id="telefone" class="form-control mb-3" 
                type="text" required
                placeholder="Digite aqui">
            
            <label for="endereco">Endereço</label>
            <textarea id="endereco" class="form-control mb-3" 
                placeholder="Digite aqui"></textarea>

            <label for="observacao">Observação</label>
            <textarea id="observacao" class="form-control mb-3" 
                placeholder="Digite aqui"></textarea>

            <button class="btn btn-primary w-100">
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
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Observação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Chiquim</td>
                <td>chiquim@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Vicente Leite, 1010</td>
                <td>Cliente bonequeiro</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>maria@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Osvaldo Cruz, 1090</td>
                <td>...</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>maria@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Osvaldo Cruz, 1090</td>
                <td>...</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>maria@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Osvaldo Cruz, 1090</td>
                <td>...</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>maria@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Osvaldo Cruz, 1090</td>
                <td>...</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>maria@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Osvaldo Cruz, 1090</td>
                <td>...</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria</td>
                <td>maria@email.com</td>
                <td>85 9 1231-1234</td>
                <td>Rua Osvaldo Cruz, 1090</td>
                <td>...</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>

        </tbody>

    </table>
</section>


<?php include 'views/footer.php'; ?>