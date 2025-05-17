<?php 
    $id = $_GET['id'];
    require 'Contato.class.php';
    $contato = new Contato();
    if (isset($_POST['botao'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome  = $_POST['nome'];

    $contato->editUser($nome, $email, $senha, $id);
    header("location:index.php");
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
      <input type="text" name="nome" placeholder="nome" required>
      <input type="password" name="senha" placeholder="senha" required>
      <input type="submit" name="botao" value="editar" class="home-btn">
    </form>
  </div>
</body>
</html>