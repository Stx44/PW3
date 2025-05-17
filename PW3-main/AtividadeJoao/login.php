<?php
session_start();

// Importar a classe:
require "Contato.class.php";

// Verificar se o formulário foi enviado
if (isset($_POST['botao'])) {
    // Copiar do POST para variáveis locais
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Instanciar a classe Contato
    $contato = new Contato();

    // Verificar se o usuário existe
    $existeCaba = $contato->checkUser($email);

    if (!empty($existeCaba)) {
        // Verificar se a senha está correta
        $chkPass = $contato->checkUserPass($email, $senha);
        if (!empty($chkPass)) {
            // Login bem-sucedido
            $_SESSION['nome'] = $chkPass['nome'];
            header("Location: index.php");
            exit(); // Interromper o script após o redirecionamento
        } else {
            // Senha incorreta
            echo "<script type='text/javascript'>alert('Senha incorreta');</script>";
        }
    } else {
        // Usuário não encontrado
        echo "<script type='text/javascript'>alert('Usuário ou senha inválidos');</script>";
        exit(); // Opcional para garantir que o script pare aqui
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
  <div class="background"></div>
  <div class="card">
    
    <h1 class="fonte">login</h1>
    
    <!-- Formulário de login -->
    <form action="" class="form" method="post">
      <!-- Correção: Adicionar o atributo 'name' para os inputs -->
      <input type="text" name="email" placeholder="email" required>
      <input type="password" name="senha" placeholder="senha" required>
      <input type="submit" name="botao" value="Entrar" class="home-btn">
    </form>

    <footer class="botao">
      <a href="esquecisenha.php">Esqueci minha senha</a>
    </footer>
    <br>
    <footer>
      <a href="cadastro.php">Não possuo uma conta</a>
    </footer>
  </div>
</body>
</html>