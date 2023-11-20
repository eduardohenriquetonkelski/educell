<?php
// Inclua o arquivo de configuração do banco de dados
include "config.php";

// Crie uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Define o ID da categoria desejada (neste caso, 1 para "Celulares")
$id_categoria_desejada = 3;

// Consulta SQL para recuperar produtos da categoria com ID 1 (Celulares)
$sql = "SELECT * 
        FROM produtos
        WHERE id_categoria = $id_categoria_desejada";

$result = $conn->query($sql);

    // Inicialize o array de produtos
$acessorios = array();

// Verifique se a consulta retornou resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $acessorios[] = $row; // Adicione o produto ao array de produtos
    }
}

    // Feche a conexão
    $conn->close();

    return $result;

?>
