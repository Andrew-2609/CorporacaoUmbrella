<?php 
	include_once 'conexao.php';
	
		$sql = "TRUNCATE TABLE carrinho";
		$inserir = mysqli_query($conexao, $sql);	

	if(!$inserir) {
		echo "Erro na remoção dos produtos";
	}
	else {
		header("location:medicamentos.php");
	}
 ?>
 <body>
	<a href="medicamentos.php">Voltar para a página de Produtos</a>
</body>