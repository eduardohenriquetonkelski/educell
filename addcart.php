<?php
session_start();

// Inicialize o carrinho se ainda não existir na sessão
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Função para buscar informações do produto (substitua isso pela consulta SQL real)
function buscarInformacoesDoProduto($produto_id) {
    include "config.php"; // Inclua o arquivo de configuração do banco de dados

    $sql = "SELECT * FROM produtos WHERE id = $produto_id";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        return $resultado->fetch_assoc();
    }

    return null;
}

if (isset($_GET['produto']) && isset($_GET['quantidade'])) {
    $produto_id = $_GET['produto'];
    $quantidade = $_GET['quantidade'];

    // Recupere informações do produto do banco de dados com base no $produto_id
    $produto_info = buscarInformacoesDoProduto($produto_id);
    
    if ($produto_info) {
        // Adicione o produto ao carrinho
        $itemCarrinho = array(
            'id' => $produto_id,
            'nome' => $produto_info['nome'],
            'preco' => $produto_info['preco_atual'],
            'quantidade' => $quantidade,
        );

        // Verifique se o produto já está no carrinho e, se sim, atualize a quantidade
        $produto_no_carrinho = false;
        foreach ($_SESSION['carrinho'] as &$item) {
            if ($item['id'] == $produto_id) {
                $item['quantidade'] += $quantidade;
                $produto_no_carrinho = true;
                break;
            }
        }

        if (!$produto_no_carrinho) {
            $_SESSION['carrinho'][] = $itemCarrinho;
        }

        // Redirecione para a página do produto
        header("Location: produto.php?id=$produto_id");
    }
}
?>
