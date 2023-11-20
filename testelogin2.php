<?php

session_start();
include 'config.php';

// Crie a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

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
  //remover prouto
  if($_GET['acao'] == 'del'){
    $id = intval($_GET['id']);
        if(isset($_SESSION['carrinho'][$id])){
          unset($_SESSION['carrinho'][$id]);

    }

  }
}


if (count($_SESSION['carrinho']) ==0){
	echo "Não há produtos no carrinho";
}else{
  require("config.php");
  foreach($_SESSION['carrinho'] as $id => $qtd) {
    // Query para recuperar produtos"
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $result = $conn->query($sql);
    $produto = $result->fetch_assoc();
    $nome = $produto['nome'];
    $preco = number_format($produto['preco_atual'], 2, ',', '.');
    
    $qtd = $_SESSION['carrinho'][$id];
    $total = number_format($qtd * $produto['preco_atual'], 2, ',', '.');
    
    echo '<tbody>
            <tr>
                <th scope="row">' . $id . '</th>
                <td>' . $nome . '</td>
                <td>' . $preco . '</td>
                <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd . '"/></td>
                <td>' . $total . '</td>
                <td><a href="?acao=del&id=' .$id.'">Remover</a></td>
            </tr>
        </tbody>';
  }
  
}


print_r($_SESSION['carrinho']);



?>
