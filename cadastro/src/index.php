<?php
	session_start();
    
    $nome = $_REQUEST["nome"];
    $telefone = $_REQUEST["telefone"];
	
	$_SESSION["nome"]=$nome;
	$_SESSION["telefone"]=$telefone;

    echo '<a href="exibir.php">DADOS SALVOS</a>'
?>
