<?php 
	include_once "conexao.php";

	$modalEmail = $_POST['modalEmail'];
	$modalSenha = $_POST['modalSenha'];
	$retorno = 0;

	$query = 'SELECT * FROM compradores';
	$executa = mysqli_query($conexao, $query);

	while($dados = mysqli_fetch_array($executa)) {
		$emailDb = $dados['usuario'];
		$senhaDb = $dados['senha'];

		if($modalEmail == $emailDb && $modalSenha == $senhaDb) {
			session_start();
			$retorno = 1;
		}
	}

	echo "<br>$retorno";
 ?>