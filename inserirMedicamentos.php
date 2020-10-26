<?php 
	include_once 'conexao.php';
	
	$id = $_POST['id']; 
	$qtd = $_POST['qtd'];
	$nome = $_POST['nome'];
	$precoInicial = $_POST['preco'];

	$preco = ($qtd * $precoInicial);

	$sql = "INSERT INTO produtosComprados(nome, preco, quantidade, codigoProduto) VALUES ('$nome', $preco, $qtd, $id)";
	$inserir = mysqli_query($conexao, $sql);

	if(!$inserir) {
		echo "Erro na compra do produto";
	}
	else {
		$sql1 = "TRUNCATE TABLE carrinho";
		$resul = mysqli_query($conexao, $sql1);	
		header("location:medicamentos.php");
	}
 ?>
 <body>
	<a href="medicamentos.php">Voltar para a página de Produtos</a>
</body>