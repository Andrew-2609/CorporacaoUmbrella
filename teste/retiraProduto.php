<?php 
	include_once 'conexao.php';
		
		$id = $_POST['id'];

		$sql = "TRUNCATE TABLE carrinho where id = " $id;
		$inserir = mysqli_query($conexao, $sql);	

	if(!$inserir) {
		echo "Erro na remoção dos produtos";
	}
	else {
		header("location:medicamentos.php");
	}
 ?>