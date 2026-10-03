<?php 
    // 1) Recebendo valores
    $login = $_GET['login'];
    $senha = $_GET['senha'];

    //2) Verificando entrada 'Simulando o BD' 
    if($login == "admin" && $senha == "admin")
    {
        //Entra
        header("Location: ../Lista/lista.php");
    }
    else
    {
        //Deu ruim
        echo "<script> alert('Usuário Inexistente!'); </script>";
        header("Location: login.html");
    }

 
?>
