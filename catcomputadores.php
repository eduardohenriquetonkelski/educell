<?php
include 'header.php';
include 'query_computadores.php';
?>
  <body>

  <!-- Produtos em Destaque -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Todos os Produtos</h2>
    <div class="row">
    
    <!-- Loop para iterar sobre os produtos-->
    <?php    
    foreach ($computadores as $produto) {
        
        echo '<div class="col-md-4 mb-4">';
        echo '<div class="card">';
        echo '<div class="position-relative">';
        echo '<img src="' . trim($produto['img']) . '" class="card-img-top" alt="' . $produto['nome'] . '">';
        echo '<div class="product-discount-badge">14% OFF</div>';
        echo '</div>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title limit-text">' . $produto['nome'] . '</h5>';
        echo '<p class="card-text text-muted previous-price">R$' . $produto['preco_anterior'] . '</p>';
        echo '<p class="card-text">R$' . $produto['preco_atual'] . '</p>';

//        echo '<div class="input-group mt-3" style="max-width: 200px;">';
//        echo '<span class="input-group-btn">';
//        echo '<button type="button" class="btn btn-danger btn-number" data-type="minus">-</button>';
//        echo '</span>';
//        echo '<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" style="text-align: center;">';
//        echo '<span class="input-group-btn">';
//        echo '<button type="button" class="btn btn-success btn-number" data-type="plus">+</button>';
//        echo '</span>';
//        echo '</div>';

        echo '      <div class="text-center mt-3">';
        echo '<a href="carrinho-compra.php?produto=add&id=' . $produto['id'] . '" class="btn btn-primary mt-3">Comprar</a>';
        echo '<a href="produto.php?id=' . $produto['id'] . '" class="btn btn-secondary mt-3">Ver Produto</a>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
    <!-- Ícones -->
        <div class="conditions"> 
            <div class="row mt-4">
                <div class="col-md-3 text-center">
                    <img src="Assets/frete.png" alt="">
                    
                </div>
                <div class="col-md-3 text-center">
                    <img src="Assets/cartao.png" alt="">
                    
                </div>
                <div class="col-md-3 text-center">
                    <img src="Assets/seguranca.png" alt="">
                    
                </div>
                <div class="col-md-3 text-center">
                    <img src="Assets/troca.png" alt="">
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>
