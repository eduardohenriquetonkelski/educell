<?php
include 'header.php';
include 'query_produtos.php'
?>
  <body>

    <!-- Carrossel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Assets/banner1.webp" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="Assets/banner2.webp" class="d-block w-100" alt="Banner 2">
            </div>
        </div>
    </div>

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

  <!-- Produtos em Destaque -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Todos os Produtos</h2>
    <div class="row">
    
    <!-- Loop para iterar sobre os produtos-->
    <?php    
    foreach ($produtos as $produto) {
        
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
        echo '      <div class="text-center mt-3">';
        echo '<a href="carrinho-compra.php?produto=add&id=' . $produto['id'] . '" class="btn btn-primary mt-3">Comprar</a>';
        echo '<a href="produto.php?id=' . $produto['id'] . '" class="btn btn-secondary mt-3">Ver Produto</a>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
      

    </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>
