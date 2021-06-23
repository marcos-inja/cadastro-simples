<?php
	session_start();
	echo "Nome: ".$_SESSION["nome"]."<br>";
	echo "Telefone: ".$_SESSION["telefone"]."<br>";
?>