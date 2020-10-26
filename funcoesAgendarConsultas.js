function mudarValor() {
	if(document.getElementById('tipo').value == "Neurológica") {
		document.getElementById('preco').value = 1500.00;
	}else if(document.getElementById('tipo').value == "Psiquiátrica"){
		document.getElementById('preco').value = 1000.00;
	}else if (document.getElementById('tipo').value == "Cardíaca") {
		document.getElementById('preco').value = 9000.00
	}else if(document.getElementById('tipo').value == "Odontológica"){
		document.getElementById('preco').value = 1200.00
	}else{
		alert ("Informe uma Especificação");
		document.getElementById('preco').value = "Automático"
	}
}