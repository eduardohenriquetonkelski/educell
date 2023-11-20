<?php
// Inclua o arquivo de configuração
include "config.php";

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Processa o formulário se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco_anterior = $_POST["preco"];
    $preco_atual = $_POST["preco_atual"];
    $descricao = $_POST["descricao"];
    $img = $_FILES["imagem"];
    $estoque = $_POST["estoque"];
    $id_categoria = intval($_POST["id_categoria"]);
    $id_subcategoria = intval($_POST["id_subcategoria"]);



// Manipule a imagem do produto aqui (faça o upload e defina o caminho da imagem)
if ($_FILES["imagem"]["error"] == UPLOAD_ERR_OK) {
    $temp_name = $_FILES["imagem"]["tmp_name"];
    $target_path = "Assets/produtos/" . $_FILES["imagem"]["name"];
    var_dump($target_path);

    // Mova a imagem do local temporário para o destino final
    if (move_uploaded_file($temp_name, $target_path)) {
        // A imagem foi carregada com sucesso, você pode armazenar o caminho no banco de dados
        $caminho_imagem = "Assets/produtos/" . $_FILES["imagem"]["name"];

        // Agora você pode usar $caminho_imagem para armazenar no banco de dados
        // Certifique-se de que a coluna do banco de dados onde você armazena o caminho da imagem seja do tipo VARCHAR ou TEXT
    } else {
        // O upload da imagem falhou
        echo "Erro ao fazer upload da imagem.";
    }
}

var_dump($id_categoria);
var_dump($id_subcategoria);
var_dump($_POST);

    // Insere os dados na tabela de produtos
    $sql = "INSERT INTO produtos (nome, preco_anterior, preco_atual, descricao, estoque, img, id_categoria, id_subcategoria) VALUES ('$nome', $preco_anterior, $preco_atual, '$descricao','$estoque','$target_path', '$id_categoria', '$id_subcategoria')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso.";
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }
}

// Inserção bem-sucedida
echo "<script>alert('Produto cadastrado.');</script>";
echo "<script>window.location = 'cadprodutos.php';</script>";


// Fecha a conexão com o banco de dados
$conn->close();
?>