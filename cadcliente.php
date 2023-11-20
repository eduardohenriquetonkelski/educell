<?php
include 'header.php';

?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Cadastro de Cliente</h1>
                <form action="proc_cad_cliente.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for "email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <textarea class="form-control" id="endereco" name="endereco" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="Login.php" class="btn btn-success">Ja tem Cadastro</a>
                </form>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>

</body>
</html>
