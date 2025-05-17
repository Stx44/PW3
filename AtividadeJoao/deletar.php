
<?php 
    $id = $_GET['id'];
    require 'Contato.class.php';
    $contato = new Contato();
    $contato->deleteUser($id);
    header("location:index.php");
?>