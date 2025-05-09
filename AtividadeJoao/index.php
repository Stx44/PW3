<?php
session_start();

if (isset($_SESSION['nome'])) {
    // Redireciona para a página 'entrar.html' se o usuário estiver logado
    header("location:login.php");
    exit(); // É importante chamar 'exit' após o redirecionamento para garantir que o restante do código não seja executado.
} 
else {
    // Se não estiver logado, redireciona para a página de login 'login.php'
    header("location:login.php");
    exit(); // Também é bom usar 'exit' aqui.
}
?>