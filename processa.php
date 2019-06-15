<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$valor1 = filter_input(INPUT_POST, 'valor1', FILTER_SANITIZE_STRING);

if(empty($nome)||empty($valor1))
{
    

    header("LOCATION: erro.php");
    exit;

   
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (desnome, desvalor) VALUES (:NOME, :VALOR)");

$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":VALOR", $valor1);

 $result = $stmt->execute();

if($result===true)
{
    header("LOCATION: certo.php");
}else{
    header("LOCATION: index.php");
}

?>