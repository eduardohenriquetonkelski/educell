<?php
 ob_start();
include 'header.php';
include 'config.php';
// Crie a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
// Inicialize o carrinho se ainda não existir na sessão
if (!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = array();
}

//adicionar produto
if(isset($_GET['produto'])) {
  //adicionar carrinho
  if($_GET['produto'] == 'add') {
    $produto = intval($_GET['id']);
    if(!isset($_SESSION['carrinho'][$produto])) {
      $_SESSION['carrinho'][$produto] = 1;
    } else {
      $_SESSION['carrinho'][$produto] += 1;
    }
  }
}
//remover carrinho
if(isset($_GET['acao']) && $_GET['acao'] == 'del'){
  $id = intval($_GET['id']);
  if(isset($_SESSION['carrinho'][$id])){
    unset($_SESSION['carrinho'][$id]);
  }
}

// Calcula o total do carrinho
$total = 0;
foreach($_SESSION['carrinho'] as $id => $quantidade) {
  $produto = $conn->query("SELECT * FROM produtos WHERE id = '$id'")->fetch_assoc();
  $total += $produto['preco_atual'] * $quantidade;
}

// Imprime o total do carrinho
echo "<h2>Total do carrinho: R$ " . number_format($total, 2, ',', '.') . "</h2>";


ob_end_flush();
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor Unitário</th>
      <th scope="col">Qtde</th>
      <th scope="col">R$ Total</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>

<?php
if (count($_SESSION['carrinho']) ==0){
	echo "Não há produtos no carrinho";
}else{
  foreach(array_keys($_SESSION['carrinho']) as $id) {
    // Query para recuperar produtos"
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $result = $conn->query($sql);
    $produto = $result->fetch_assoc();
    $nome = $produto['nome'];
    $preco = number_format($produto['preco_atual'], 2, ',', '.');
    
    $quantidade = $_SESSION['carrinho'][$id];
    $total = number_format($quantidade * $produto['preco_atual'], 2, ',', '.');
    
    echo '<tbody>
            <tr>
                <th scope="row">' . $id . '</th>
                <td>' . $nome . '</td>
                <td>' . $preco . '</td>
                <td>' . $quantidade . '</td>
                <td>' . $total . '</td>
                <td><a href="carrinho-compra.php?acao=del&id=' .$id.'">Remover</a></td>
            </tr>
        </tbody>';
      }
    }
    ?>
  
</table>
  
<a href="index.php">Continuar comprando</a>

<?php
include 'footer.php';
?>



