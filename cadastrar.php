<?php

    $produto = $_POST['txProduto'];
    $idCategoria = $_POST['txIdCategoria'];
    $valor = $_POST['txValor'];    

    include("conection.php");

    $stmt = $pdo->prepare("insert into tbProduto values(null,'$produto','$idCategoria','$valor');");	
	$stmt ->execute();

    header("location:exibicao.php");

?>