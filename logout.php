<?php
session_start(); // Inicie a sessão

// Verifique se o usuário está autenticado
if (isset($_SESSION["email"])) {
    // Se o usuário estiver autenticado, encerre a sessão
    session_unset(); // Limpe todas as variáveis de sessão
    session_destroy(); // Destrua a sessão

    // Redirecione para a página de login ou qualquer outra página de sua escolha
    header("Location: login.php"); // Substitua "login.php" pela página que deseja redirecionar
} else {
    // Se o usuário não estiver autenticado, redirecione para a página de login
    header("Location: login.php"); // Substitua "login.php" pela página que deseja redirecionar
}
?>
