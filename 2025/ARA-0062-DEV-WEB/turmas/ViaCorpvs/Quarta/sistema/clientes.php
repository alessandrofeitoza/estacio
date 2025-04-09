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
            <?php
            //esses dados vao vir do banco
            $clientes = [
                [
                    'id' => 1,
                    'nome' => 'Chiquim',
                    'endereco' => 'Jurema, Caucaia',
                    'email' => 'chiquim@email.com',
                    'telefones' => '(85) 9 8674-0502',
                    'observacao' => 'Cliente bom',
                ],
                [
                    'id' => 2,
                    'nome' => 'Maria Silva',
                    'endereco' => 'Rua das Flores, Fortaleza',
                    'email' => 'maria.silva@email.com',
                    'telefone' => '(85) 9 9988-1234',
                    'observacao' => 'Sempre pontual nos pagamentos',
                ],
                [
                    'id' => 3,
                    'nome' => 'João Pereira',
                    'endereco' => 'Av. Central, Juazeiro do Norte',
                    'email' => 'joao.pereira@email.com',
                    'telefone' => '(88) 9 2345-6789',
                    'observacao' => 'Cliente exigente',
                ],
                [
                    'id' => 4,
                    'nome' => 'Ana Costa',
                    'endereco' => 'Rua dos Ipês, Sobral',
                    'email' => 'ana.costa@email.com',
                    'telefone' => '(88) 9 3456-7890',
                    'observacao' => 'Cliente de longo prazo',
                ],
                [
                    'id' => 5,
                    'nome' => 'Carlos Souza',
                    'endereco' => 'Avenida Beira Mar, Fortaleza',
                    'email' => 'carlos.souza@email.com',
                    'telefone' => '(85) 9 9876-5432',
                    'observacao' => 'Gosta de novidades',
                ],
                [
                    'id' => 6,
                    'nome' => 'Fernanda Lima',
                    'endereco' => 'Praia das Fontes, Beberibe',
                    'email' => 'fernanda.lima@email.com',
                    'telefone' => '(85) 9 1234-5678',
                    'observacao' => 'Sempre solicita',
                ],
                [
                    'id' => 7,
                    'nome' => 'Ricardo Gomes',
                    'endereco' => 'Rua da Paz, Crato',
                    'email' => 'ricardo.gomes@email.com',
                    'telefone' => '(88) 9 6543-2109',
                    'observacao' => 'Muito organizado',
                ],
                [
                    'id' => 8,
                    'nome' => 'Juliana Rocha',
                    'endereco' => 'Rua do Sol, Maracanaú',
                    'email' => 'juliana.rocha@email.com',
                    'telefone' => '(85) 9 8765-4321',
                    'observacao' => 'Cliente fiel',
                ],
                [
                    'id' => 9,
                    'nome' => 'Paulo Henrique',
                    'endereco' => 'Av. Domingos Olímpio, Fortaleza',
                    'email' => 'paulo.henrique@email.com',
                    'telefone' => '(85) 9 1122-3344',
                    'observacao' => 'Reclama muito, mas sempre paga',
                ],
                [
                    'id' => 10,
                    'nome' => 'Lucas Martins',
                    'endereco' => 'Rua São José, Caucaia',
                    'email' => 'lucas.martins@email.com',
                    'telefone' => '(85) 9 5566-7788',
                    'observacao' => 'Cliente recente',
                ],
            ];
            
            foreach ($clientes as $cada) {
                echo "
                    <tr>
                        <td>{$cada['id']}</td>
                        <td>{$cada['nome']}</td>
                        <td>{$cada['email']}</td>
                        <td>{$cada['telefone']}</td>
                        <td>{$cada['endereco']}</td>
                        <td>{$cada['obs']}</td>
                    </tr>
                ";
            }

            ?>

        </tbody>

    </table>
</section>


<?php include 'views/footer.php'; ?>