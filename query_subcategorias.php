<?php
// Inclua o arquivo de configuração do banco de dados
include "config.php";

// Crie a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Query para recuperar produtos da categoria "Celulares"
$sql_iphone = "SELECT * FROM produtos WHERE id_subcategoria = '1'";
$result_iphone = $conn->query($sql_iphone);

// Inicialize o array de produtos para a categoria "Celulares"
$iphone = array();

// Verifique se a consulta retornou resultados
if ($result_iphone->num_rows > 0) {
    while ($produto = $result_iphone->fetch_assoc()) {
        $iphone[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}
// Query para recuperar produtos da categoria "Celulares"
$sql_motorola = "SELECT * FROM produtos WHERE id_subcategoria = '2'";
$result_motorola = $conn->query($sql_motorola);

// Inicialize o array de produtos para a categoria "Celulares"
$motorola = array();

// Verifique se a consulta retornou resultados
if ($result_motorola->num_rows > 0) {
    while ($produto = $result_motorola->fetch_assoc()) {
        $motorola[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}
// Query para recuperar produtos da categoria "Celulares"
$sql_xiaomi = "SELECT * FROM produtos WHERE id_subcategoria = '3'";
$result_xiaomi = $conn->query($sql_xiaomi);

// Inicialize o array de produtos para a categoria "Celulares"
$xiaomi = array();

// Verifique se a consulta retornou resultados
if ($result_xiaomi->num_rows > 0) {
    while ($produto = $result_xiaomi->fetch_assoc()) {
        $xiaomi[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}
// Query para recuperar produtos da categoria "Celulares"
$sql_samsung = "SELECT * FROM produtos WHERE id_subcategoria = '4'";
$result_samsung = $conn->query($sql_samsung);

// Inicialize o array de produtos para a categoria "Celulares"
$samsung = array();

// Verifique se a consulta retornou resultados
if ($result_samsung->num_rows > 0) {
    while ($produto = $result_samsung->fetch_assoc()) {
        $samsung[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}

// Query para recuperar produtos da categoria "Celulares"
$sql_perifericos = "SELECT * FROM produtos WHERE id_subcategoria = '5'";
$result_perifericos = $conn->query($sql_perifericos);

// Inicialize o array de produtos para a categoria "Celulares"
$perifericos = array();

// Verifique se a consulta retornou resultados
if ($result_perifericos->num_rows > 0) {
    while ($produto = $result_perifericos->fetch_assoc()) {
        $perifericos[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}

// Query para recuperar produtos da categoria "Celulares"
$sql_monitores = "SELECT * FROM produtos WHERE id_subcategoria = '6'";
$result_monitores = $conn->query($sql_monitores);

// Inicialize o array de produtos para a categoria "Celulares"
$monitores = array();

// Verifique se a consulta retornou resultados
if ($result_monitores->num_rows > 0) {
    while ($produto = $result_monitores->fetch_assoc()) {
        $monitores[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}

// Query para recuperar produtos da categoria "Celulares"
$sql_componentes = "SELECT * FROM produtos WHERE id_subcategoria = '7'";
$result_componentes = $conn->query($sql_componentes);

// Inicialize o array de produtos para a categoria "Celulares"
$componentes = array();

// Verifique se a consulta retornou resultados
if ($result_componentes->num_rows > 0) {
    while ($produto = $result_componentes->fetch_assoc()) {
        $componentes[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}

// Query para recuperar produtos da categoria "Celulares"
$sql_fones = "SELECT * FROM produtos WHERE id_subcategoria = '8'";
$result_fones = $conn->query($sql_fones);

// Inicialize o array de produtos para a categoria "Celulares"
$fones = array();

// Verifique se a consulta retornou resultados
if ($result_fones->num_rows > 0) {
    while ($produto = $result_fones->fetch_assoc()) {
        $fones[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}

// Query para recuperar produtos da categoria "Celulares"
$sql_carregadores = "SELECT * FROM produtos WHERE id_subcategoria = '9'";
$result_carregadores = $conn->query($sql_carregadores);

// Inicialize o array de produtos para a categoria "Celulares"
$carregadores = array();

// Verifique se a consulta retornou resultados
if ($result_carregadores->num_rows > 0) {
    while ($produto = $result_carregadores->fetch_assoc()) {
        $carregadores[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}


// Query para recuperar produtos da categoria "Celulares"
$sql_peliculas = "SELECT * FROM produtos WHERE id_subcategoria = '10'";
$result_peliculas = $conn->query($sql_peliculas);

// Inicialize o array de produtos para a categoria "Celulares"
$peliculas = array();

// Verifique se a consulta retornou resultados
if ($result_peliculas->num_rows > 0) {
    while ($produto = $result_peliculas->fetch_assoc()) {
        $peliculas[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}

// Query para recuperar produtos da categoria "Celulares"
$sql_capinhas = "SELECT * FROM produtos WHERE id_subcategoria = '11'";
$result_capinhas = $conn->query($sql_capinhas);

// Inicialize o array de produtos para a categoria "Celulares"
$capinhas = array();

// Verifique se a consulta retornou resultados
if ($result_capinhas->num_rows > 0) {
    while ($produto = $result_capinhas->fetch_assoc()) {
        $capinhas[] = $produto; // Adicione o produto ao array de produtos da categoria "Celulares"
    }
}



// Feche a conexão com o banco de dados
$conn->close();
?>
