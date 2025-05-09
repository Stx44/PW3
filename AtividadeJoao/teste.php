<?php
include 'Contato.class.php';

$fabao = $contato = new Contato();
if ($fabao) {
    $resultado = $contato->checkUser("fabioclaret@gmail.com");
    if(!empty($resultado) ){
        echo "
        <script>
            alert('Usuario ja cadastrado')
        </script>";
    }else{
        $contato->insertUser("nome" , "fabioclaret@gmail.com" , "senha");
    }
    
} else {
    echo "tente mais tarde"
}



