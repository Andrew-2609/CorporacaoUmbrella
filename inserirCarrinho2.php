<?php 
	$qtdProduto2 = 1;
	$nomeProduto2 = $_POST['cloridato'];
	$precoInicial2 = $_POST['precoCloridato'];

	$sql1 = "INSERT INTO carrinho(nomeProduto, precoProduto, qtdProduto) VALUES ('$nomeProduto2', $precoInicial2, $qtdProduto2)";
	$inserir = mysqli_query($conexao, $sql1);

	if(!$inserir) {
		echo "Erro na compra do produto";
	}
	else {
		header("location:medicamentos.php");
	}
 ?>