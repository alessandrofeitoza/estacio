<?php include 'views/head.php'; ?>

<div class="row mt-5">
    <div class="col-4 offset-4 mt-5">
        <div class="card card-body mt-5 shadow">
            <h2>Login</h2>
            <hr>
            <form action="dashboard.php">
                <input class="form-control form-control-lg mb-3" placeholder="Email" type="email">

                <input class="form-control form-control-lg mb-3" placeholder="Senha" type="password">
            
                <button class="btn btn-primary btn-lg w-100">ENTRAR</button>
            </form>
        </div>
    </div>
</div>

<?php include 'views/footer.php'; ?>