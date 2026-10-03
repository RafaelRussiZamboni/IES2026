<?php
    // 1) Recebendo os dados do form
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'] ;
    $codigo = $_POST['codigo'];
    $modelo = $_POST['modelo'];
    $disponibilidade = $_POST['disponibilidade'];

    // 2) Conectando com o DB :)
    $con = mysqli_connect('localhost','root','','almoxarife');
    
    // 3) Query de Insert
    $sql = "INSERT INTO equipamento(nome,descricao,codigo,
            modelo,disponibilidade)
            VALUES('$nome','$descricao',
            '$codigo','$modelo','$disponibilidade')";

    // 4) Executando a query
    $retorno =  mysqli_query($con,$sql);   
    
    if($retorno)
    {
        echo "Salvo com sucesso!!! S2";
    }
    else
    {
        echo $sql;
    }

?>