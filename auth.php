<?php
session_start();

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = md5($_POST["password"]);
    $conn = mysqli_connect("localhost", "root", "", "educell");

    // Conecta ao banco de dados
    $conn = mysqli_connect("localhost", "root", "", "educell");

    // Realiza a consulta
    $query = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);

    // Verifica se o usuário foi encontrado
    if (mysqli_num_rows($result) == 1) {
      // O usuário foi encontrado, inicia a sessão
      session_start();
      $_SESSION["email"] = $email;

      // Redireciona para a página principal
      header("Location: index.php");
    } else {
      // O usuário não foi encontrado, exibe uma mensagem de erro
      echo "Usuário ou senha inválidos.";
    }
  }
?>