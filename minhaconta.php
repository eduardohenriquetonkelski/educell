<?php
 ob_start();

 // Include the header file
 include 'header.php';
// Inclua o arquivo de configuração do banco de dados (substitua pelos seus próprios dados de conexão)
include "config.php";

// Get the user's ID from the session variable
$usuario_id = $_SESSION["email"];

if (!isset($_SESSION["email"])) {
    // Usuário não está logado
    header("Location: login.php");
}

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Get the user's ID from the session variable
$id_usuario = $_SESSION["email"];

// Query the database to get the user's data
$sql = "SELECT nome, email, telefone, endereco FROM clientes WHERE email = '$usuario_id'";
$result = $conn->query($sql);

// Check if the user was found
if ($result->num_rows == 1) {
    // Get the user's data from the result
    $row = $result->fetch_assoc();

    // Assign the user's data to the corresponding variables
    $nome = $row["nome"];
    $email = $row["email"];
    $telefone = $row["telefone"];
    $endereco = $row["endereco"];
} else {
    // User not found
    echo "Usuário não encontrado";
}

// Feche a conexão com o banco de dados
$conn->close();
ob_end_flush();
?>


<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Cadastro de Cliente</h1>
                <form action="proc_cad_cliente.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for "email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <textarea class="form-control" id="endereco" name="endereco" required><?php echo $endereco; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    
                    
                </form>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>

</body>
</html>
