<?php include 'views/head.php'; ?>
<?php include 'views/navbar.php'; ?>

    <section class="card card-body shadow">
        <div class="d-flex justify-content-between">
            <h2>Clientes</h2>

            <span>
                <a href="" 
                   data-bs-toggle="offcanvas" 
                   data-bs-target="#cadastro" class="btn btn-primary">
                    Novo Cliente
                </a>
            </span>
        </div>


        <hr>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Foto</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>

            </tbody>
        </table>

          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="cadastro" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Novo Cliente</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome"
                           class="form-control mb-3" 
                           placeholder="Digite aqui">

                    <label for="email">Email</label>
                    <input type="email" id="email"
                            class="form-control mb-3" 
                            placeholder="Digite aqui">

                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone"
                            class="form-control mb-3" 
                            placeholder="Digite aqui">

                    <label for="foto">URL da Foto</label>
                    <input type="url" id="foto"
                            class="form-control mb-3" 
                            placeholder="Digite aqui">

                    <label for="endereco">Endereço</label>
                    <textarea id="endereco"
                        class="form-control mb-3" 
                        placeholder="Digite aqui"></textarea>

                    <button class="btn btn-primary w-100">
                        PRONTO
                    </button>
                </form>
            </div>
          </div>

    </section>

<?php include 'views/footer.php'; ?>