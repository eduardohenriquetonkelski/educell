<?php
// Inclua o arquivo de configuração
include "config.php";


// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password);


// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}



// Cria a base de dados
//$sql = "CREATE DATABASE IF NOT EXISTS $database";
//if ($conn->query($sql) === TRUE) {
    //echo "Base de dados criada com sucesso.";
//} else {
    //echo "Erro ao criar a base de dados: " . $conn->error;
//}

// Seleciona a base de dados
$conn->select_db($database);


// Cria a tabela "clientes"
$sql = "CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'clientes' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela 'clientes': " . $conn->error;
}

// Cria a tabela "produtos"
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco_anterior DECIMAL(10, 2) NOT NULL,
    preco_atual DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'produtos' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela 'produtos': " . $conn->error;
}

// Cria a tabela "categorias"
$sql = "CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'categorias' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela 'categoria': " . $conn->error;
}

// Cria a tabela "Marcas"
$sql = "CREATE TABLE IF NOT EXISTS subcategoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'subcategoria' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela 'subcategoria': " . $conn->error;
}

// Cria a tabela "Carrinho"
$sql = "CREATE TABLE IF NOT EXISTS carrinho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    name_product VARCHAR(255) NOT NULL,
    quantity INT,
    preco DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'carrinho' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela 'carrinho': " . $conn->error;
}



// Fecha a conexão com o banco de dados
$conn->close();
?>
