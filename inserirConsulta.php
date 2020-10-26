<?php	
	include_once 'conexao.php';

	$data_consulta = $_POST['data_consulta'];;
	$custo_consulta = $_POST['preco'];
	$tipo = $_POST['tipo'];

	$sql = "INSERT INTO consultasAgendadas(tipoConsulta, custoConsulta, dataConsulta) VALUES ('$tipo', $custo_consulta, '$data_consulta')";
	$inserir = mysqli_query($conexao, $sql);

	if(!$inserir) {
		echo "Erro na compra do produto";
		mysql_error();
	}
	else {
		include_once "consultaAgendada.php";
	}
?>