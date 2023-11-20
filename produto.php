<?php
include 'header.php';
// Inclua o arquivo de configuração do banco de dados
include "config.php";
// Crie a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password);
// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if (!empty($database) && !mysqli_select_db($conn, $database)) {
    die("Falha na seleção do banco de dados: " . mysqli_error($conn));
}

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    $sql = "SELECT * FROM produtos WHERE id = $produto_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
    } else {
        echo "Produto não encontrado.";
    }
}

//<!-- Preencha os campos HTML com os dados do produto-->
echo '<div class="container mt-5">';
echo '<div class="row">';
echo '<div class="col-md-6">';
echo '<img src="' . $produto['img'] . '" alt="' . $produto['nome'] . '" class="img-fluid">';
echo '</div>';
echo '<div class="col-md-6">';
echo '<h1>' . $produto['nome'] . '</h1>';
echo '<p class="previous-price">Preço Anterior: R$' . $produto['preco_anterior'] . '</p>';
echo '<p class="current-price">Preço Atual: R$' . $produto['preco_atual'] . '</p>';

//echo '<div class="input-group mt-3">';
//echo '<div class="input-group mt-3" style="max-width: 200px;">';
//echo '<span class="input-group-btn">';
//echo '<button type="button" class="btn btn-danger btn-number" data-type="minus">-</button>';
//echo '</span>';
//echo '<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" style="text-align: center;">';
//echo '<span class="input-group-btn">';
//echo '<button type="button" class="btn btn-success btn-number" data-type="plus">+</button>';
//echo '</span>';
//echo '</div>';
//echo '</div>';
 
echo '<a href="carrinho-compra.php?produto=add&id=' . $produto['id'] . '" class="btn btn-primary mt-3" id="comprar">Comprar</a>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="container mt-5">';
echo '<h2>Descrição do Produto</h2>';
echo '<p>' . $produto['descricao'] . '</p>';
echo '</div>';
?>

<!--
<div class="container mt-5">
    <h2>Avaliação do Produto</h2>
    <p class="product-rating">Avaliação média: 4.5/5</p>
    -->
    <!-- Adicione estrelas de classificação ou outros elementos de avaliação aqui -->
<!--    
</div>

<div class="container mt-5">
    <h3>Comentários dos Clientes</h3>
    <div class="customer-comment">
        <p class="customer-name">Cliente 1</p>
        <p class="comment-text">Comentário do Cliente 1 sobre o produto...</p>
    </div>
    <div class="customer-comment">
        <p class="customer-name">Cliente 2</p>
        <p class="comment-text">Comentário do Cliente 2 sobre o produto...</p>
    </div>
-->
    <!-- Adicione mais comentários aqui conforme necessário -->
<!--</div>-->

<?php
include 'footer.php';
?>

<script>

    // Selecione o elemento de entrada
    var quantityInput = document.getElementById("quantity");

    // Selecione os botões de mais e menos
    var minusButton = document.querySelector(".btn-number[data-type='minus']");
    var plusButton = document.querySelector(".btn-number[data-type='plus']");

    // Adicione manipuladores de eventos para os botões
    minusButton.addEventListener("click", function () {
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    plusButton.addEventListener("click", function () {
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    document.getElementById("comprar").addEventListener("click", function() {
    var quantidade = document.getElementById("quantity").value;
    var link = this.getAttribute("href");
    link = link + quantidade;
    this.setAttribute("href", link);
});
</script>


</body>

</html>