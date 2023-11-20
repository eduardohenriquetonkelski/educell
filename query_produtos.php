<?php
// Inclua o arquivo de configuração do banco de dados
include "config.php";

// Crie uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta SQL para obter os produtos
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);

    // Inicialize o array de produtos
$produtos = array();

// Verifique se a consulta retornou resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produtos[] = $row; // Adicione o produto ao array de produtos
    }
}

    // Feche a conexão
    $conn->close();

    return $result;

?>
