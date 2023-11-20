<?php
// Inclua o arquivo de configuração do banco de dados (substitua pelos seus próprios dados de conexão)
include "config.php";

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];
    $endereco = $_POST["endereco"];

    // Crie uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Hash da senha (você pode usar funções de hash mais seguras, como password_hash)
    $senhaHash = md5($senha);

    // Prepare a consulta SQL para inserir os dados do cliente
    $sql = "INSERT INTO clientes (nome, email, telefone, senha, endereco) VALUES (?, ?, ?, ?, ?)";

    // Use uma declaração preparada para evitar injeção de SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $email, $telefone, $senhaHash, $endereco);

    // Execute a consulta
    if ($stmt->execute()) {
        echo "Cliente cadastrado com sucesso.";
    } else {
        echo "Erro ao cadastrar o cliente: " . $stmt->error;
    }

    // Inserção bem-sucedida
    echo "<script>alert('Cadastro efetuado.');</script>";
    echo "<script>window.location = 'login.php';</script>";

    // Feche a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>
