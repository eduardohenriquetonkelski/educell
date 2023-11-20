<?php
include 'header.php';

?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Login</h1>
                <form action="auth.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="cadcliente.php" class="btn btn-success">Faça seu Cadastro</a>
                </form>
            </div>
        </div>
    </div>


    <?php
include 'footer.php';
?>
</body>
</html>
