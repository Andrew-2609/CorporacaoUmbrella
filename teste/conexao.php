<?php
	$servidor = "localhost";
	$bancoDeDados = "umbrella";
	$usuario = "root";
	$senha = "";
	// Cria conexão
	$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDeDados);
	// Checa a conexão
	if (!$conexao) {
	    die("Conexão falhou: " . mysqli_connect_error());
	}
?>