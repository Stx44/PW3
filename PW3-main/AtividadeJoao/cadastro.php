<?php

    // Importar a classe:
    require "Contato.class.php";

    // Checar se foi clicado no botão enviar dados
    if (isset($_POST['email'])) {
        // Copiar do POST para variáveis locais
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Instanciar a classe Contato em uma variável $contato
        $contato = new Contato();

        // Acessar o método checkUser enviando o email que foi digitado no formulário
        $existeCaba = $contato->checkUser($email);

        if (!empty($existeCaba)) {
            echo "<script type='text/javascript'>
                    alert('Usuário já cadastrado!');
                  </script>";
        } else {
            // Inserir o novo usuário
            $contato->insertUser($nome, $email, $senha);
            
            // Exibir a mensagem de sucesso e redirecionar
            echo "<script type='text/javascript'>
                    alert('usuário cadastrado com sucesso!');
                    window.location.href = 'index.html';
                  </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="background"></div>
  <div class="card">
    
    <h1 class="fonte">cadastrar</h1>
    <form action="" class="form" method="post">
      <input type="text" name="nome" placeholder="nome" required>
      <input type="text" name="email" placeholder="email" required>
      <input type="password" name="senha" placeholder="senha" required>
      <input type="submit" name="botao" value="Cadastrar" class="home-btn">
    </form>
    <footer>
      <a href="login.php">Já possuo uma conta</a>
    </footer>
  </div>
</body>
</html>        