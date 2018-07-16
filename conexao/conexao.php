<?php 
    //Passo 1: conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    //Passo 2: Testar conexão
    if (mysqli_connect_errno()){
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>