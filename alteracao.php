<?php

    $idProduto = $_POST['txIdProduto'];
    $produto = $_POST['txProduto'];
    $idCategoria = $_POST['txIdCategoria'];
    $valor = $_POST['txValor'];    

    //echo "$idProduto $produto $idCategoria $valor";

    include("conection.php");

    //$stmt = $pdo->prepare("insert into tbProduto values(null,'$produto','$idCategoria','$valor');");	

    
    $stmt = $pdo->prepare("update tbProduto set 
                            produto ='$produto'
                            ,idCategoria = $idCategoria
                            ,valor='$valor'
                            where idProduto='$idProduto'");	

	$stmt ->execute();
    

    header("location:exibicao.php");

?>