<?php 
    include 'views/head.php';
    include 'views/navbar.php'; 
?>

    <section class="card card-body shadow">
        <div class="d-flex justify-content-between">
            <h2>Produtos</h2>

            <span>
                <a href="" 
                   data-bs-toggle="offcanvas" 
                   data-bs-target="#cadastro" class="btn btn-primary">
                    Novo Produto
                </a>
            </span>
        </div>
        <hr>

        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ypióca</td>
                    <td>Prata, 960ml</td>
                    <td> <img width="120px" src="img/ypioca.jpg" alt=""> </td>
                    <td>10</td>
                    <td>R$ 18.90</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="">Editar</a>
                        <a class="btn btn-danger btn-sm" href="">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Vodka</td>
                    <td>Prata, 960ml</td>
                    <td> <img width="120px" src="img/slova.jpeg" alt=""> </td>
                    <td>10</td>
                    <td>R$ 18.90</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="">Editar</a>
                        <a class="btn btn-danger btn-sm" href="">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Jurubeba do Muido</td>
                    <td>Prata, 960ml</td>
                    <td> <img width="120px" src="img/jurubeba.jpg" alt=""> </td>
                    <td>10</td>
                    <td>R$ 18.90</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="">Editar</a>
                        <a class="btn btn-danger btn-sm" href="">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Sapupara</td>
                    <td>Ouro, celular</td>
                    <td> <img width="120px" src="img/sapupara.jpeg" alt=""> </td>
                    <td>10</td>
                    <td>R$ 18.90</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="">Editar</a>
                        <a class="btn btn-danger btn-sm" href="">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="cadastro" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Novo Produto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome"
                           class="form-control mb-3" 
                           placeholder="Digite aqui">

                    <label for="preco">Preço</label>
                    <input type="number" id="preco"
                            step="0.01"
                            class="form-control mb-3" 
                            placeholder="Digite aqui">

                    <label for="quantidade">Quantidade</label>
                    <input type="number" min="0" id="quantidade"
                            class="form-control mb-3" 
                            placeholder="Digite aqui">

                    <label for="foto">URL da Foto</label>
                    <input type="url" id="foto"
                            class="form-control mb-3" 
                            placeholder="Digite aqui">

                    <label for="descricao">Descrição</label>
                    <textarea id="descricao"
                        class="form-control mb-3" 
                        placeholder="Digite aqui"></textarea>

                    <button class="btn btn-primary w-100">
                        PRONTO
                    </button>
                </form>
            </div>
          </div>
    </section>

<?php include 'views/footer.php' ?>