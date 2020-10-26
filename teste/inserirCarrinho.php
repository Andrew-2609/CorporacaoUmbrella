<?php	
	include_once 'conexao.php';

	$qtdProduto = 1;
	$nomeProduto = $_POST['nomeProduto'];
	$precoInicial = $_POST['precoProduto'];

	$sql = "INSERT INTO carrinho(nomeProduto, precoProduto, qtdProduto) VALUES ('$nomeProduto', $precoInicial, $qtdProduto)";
	$inserir = mysqli_query($conexao, $sql);

	if(!$inserir) {
		echo "Erro na compra do produto";
	}
	else {
		header("location:medicamentos.php");
	}
?>