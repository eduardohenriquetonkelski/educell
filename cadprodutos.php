<?php
include 'header.php';
include 'config.php';
// Conecte-se ao banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter as opções para o campo categoria
$sql = "SELECT id, nome
FROM categorias
ORDER BY nome";
$result = $conn->query($sql);

// Obter as opções para o campo subcategoria
$sql = "SELECT id, nome
FROM subcategoria
ORDER BY nome";
$result = $conn->query($sql);

?>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Cadastro de Produto</h1>
            </div>
            <div class="card-body">
                <form action="proc_cad_prod.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Inserir imagem do produto:</label>
                        <input type="file" class="form-control" id="imagem" name="imagem" accept="/image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Produto:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="number" class="form-control" id="preco_anterior" name="preco" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="preco_atual" class="form-label">Preço Atual:</label>
                        <input type="number" class="form-control" id="preco_atual" name="preco_atual" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="estoque" class="form-label">Estoque:</label>
                        <input type="number" class="form-control" id="estoque" name="estoque" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição do Produto:</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="categoria" class="form-label">Categoria:</label>
                        <select class="form-control" id="id_categoria" name="id_categoria" display: inline-block>
                        <?php
                            include 'config.php';

                            // Crie a conexão com o banco de dados
                            $conn = new mysqli($servername, $username, $password, $database);

                            // Verifique a conexão
                            if ($conn->connect_error) {
                                die("Falha na conexão com o banco de dados: " . $conn->connect_error);
                            }

                            // Obter as opções para o campo categoria
                            $sql = "SELECT id, nome
                            FROM categorias
                            ORDER BY nome";
                            $result = $conn->query($sql);

                            // Preencher as opções do campo categoria
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma categoria cadastrada</option>";
                            }
                            ?>
                        </select>
</div>

<div class="form-group">
    <label for="subcategoria" class="form-label">Subcategoria:</label>
    <select class="form-control" id="id_subcategoria" name="id_subcategoria" display: inline-block>
        <?php
        include 'config.php';

        // Crie a conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $database);

        // Verifique a conexão
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Obter as opções para o campo subcategoria
        $sql = "SELECT id, nome FROM subcategoria ORDER BY nome";
        $result = $conn->query($sql);

        // Preencher as opções do campo subcategoria
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
            }
        } else {
            echo "<option value=''>Nenhuma subcategoria cadastrada</option>";
        }
        ?>
    </select>
</div>


                    
                    <div>
                        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>

</body>
</html>
