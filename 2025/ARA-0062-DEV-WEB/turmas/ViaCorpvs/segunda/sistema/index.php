<?php include 'views/head.php'; ?>
    <div style="height: 100vh;" class="row align-items-center">
        <div class="col-3 offset-3">
            <img width="90%" src="img/login.svg" alt="">
        </div>
        <div class="col-3">
            <div class="card card-body shadow">
                <h2>Login</h2>
                <hr>
                <form action="dashboard.php">
                    <input class="form-control mb-2" placeholder="Email" type="email">
                    <input class="form-control mb-3" placeholder="Senha" type="password">
                    <button class="btn btn-primary w-100">ENTRAR</button>

                    <div class="mt-3 text-center">
                        <a href="">Esqueci minha senha</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>




<?php include 'views/footer.php' ?>