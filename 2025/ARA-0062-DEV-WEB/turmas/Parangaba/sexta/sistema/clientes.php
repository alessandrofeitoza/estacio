<?php include 'partes/head.php'; ?>
<?php include 'partes/menu.php'; ?>

<?php
    $conexao = include 'utils/conexao.php';
    
    $query = 'SELECT * FROM tb_cliente';

    $pessoas = $conexao->query($query)->fetchAll();
?>

        <section class="card card-body">
            <div class="row">
                <div class="col">
                    <h3>Clientes</h3>
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

                    <label for="telefone">Telefone</label>
                    <input 
                        id="telefone" 
                        type="text" 
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
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($pessoas as $cada) {
                            echo "
                                <tr>
                                    <td>{$cada['id']}</td>
                                    <td>{$cada['nome']}</td>
                                    <td>{$cada['email']}</td>
                                    <td>{$cada['telefone']}</td>
                                    <td>{$cada['cidade']}</td>
                                    <td>
                                        <a href='' class='btn btn-sm btn-warning'>Editar</a>
                                        <a href='excluir-cliente.php?id={$cada['id']}' class='btn btn-sm btn-danger'>Excluir</a>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </section>
        
        
        <?php include 'partes/head.php'; ?>
