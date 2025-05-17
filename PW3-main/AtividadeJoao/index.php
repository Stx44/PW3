<?php
require "contato.class.php";

$contato = new Contato();


session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
} 
else {
    // Se não estiver logado, redireciona para a página de login 'login.php'
    header("location:login.php");
    exit(); // Também é bom usar 'exit' aqui.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Table
    </h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
        <?php 
            $table = $contato->getAllUser();
            foreach($table as $linha){
                echo"<tr>";
                echo"<td>".$linha["id"]."</td>";
                echo"<td>".$linha["nome"]."</td>";
                echo"<td>".$linha["email"]."</td>";
                echo"<td>".$linha["senha"]."</td>";
                echo"<td><a href='editar.php?id".$linha["id"]."'>Editar</a>";
                echo"<td><a href='deletar.php?id".$linha["id"]."'>Deletar</a>";
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>