<?php
	include_once 'conexao.php';
	class resultados{

    private $data_consulta;
    private $orcamento;
    private $tipo;

    public function setDataConsulta($data_consulta){
      $this->data_consulta = $data_consulta;
    }
    public function getDataConsulta(){
      return $this->data_consulta;
    }
    public function setOrcamento($orcamento){
      $this->orcamento = $orcamento;
    }
    public function getOrcamento(){
      return $this->orcamento;
    }
    public function setTipo($tipo){
    	$this->$tipo = $tipo;
    }
    public function getTipo(){
    	return $this->tipo;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agendar Consultas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
	<link rel="stylesheet" type="text/css" href="css/cssMenu.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="divDoMenuFixo">
        <!-- Icone do Menu -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse">
                        	<i class="fa fa-align-left iconeBranco" style="margin-left: 5px;"></i>
                            <img src="imagens/logop.png" width="40" height="40">
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>

	<section class="agendarConsultaForm">
		<div class="form-row">
			<div class="col-md-2">
				<div class="wrapper">
			        <nav id="sidebar">
			            <div id="dismiss">
			                <i class="fa fa-arrow-right iconBlack" style="color: black;" aria-hidden="true"></i>
			            </div>

			            <div class="sidebar-header">
			            	<center>
				            	<img src="imagens/logop.png" width="40" height="40">
				            	<h3 id="corporacaoMenu">Corporação</h3><h3 id="umbrellaMenu">Umbrella</h3>
				            </center>
			            </div>

			            <ul class="list-unstyled components textoCentro">
			                <li>
			                    <a href="home.php">Home</a>
			                </li>
			                <li>
			                    <a href="medicamentos.php">Produtos</a>
			                </li>
			                <li>
			                    <a href="quemSomos.php">Quem Somos</a>
			                </li>
			                <li class="active">
			                    <a href="agendarConsultas.php">Agendar Consulta</a>
			                </li>
			            </ul>

						<div>			                
			            	<center>
			            		<button class="btn" id="btnLogin" data-toggle="modal" data-target="#modal1">Login</button> 
			            		<br>
			               		<button class="btn" id="btnCadastro">Cadastro</button>
			            	</center>
			            </div>
			        </nav>
			    </div>
			</div>
		</div>

		<!-- MODAL -->
		<div class="modal fade" id="modal1" tabindex="1" aria-labelledby="modal1" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header" id="tituloModal">
			        <h5 class="modal-title">
			        	<img src="imagens/logop.png" width="30" height="30" style="margin-right: 20px;">Login - Corporação Umbrella
			        </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" id="corpoModal">
			        <form class="formModal" action="login.php" method="POST">
			        	<div class="form-row">
			        		<div class="col-md-12">
			        			<label>E-mail</label>
			        			<input type="text" name="modalEmail" class="form-control">
			        			<label>Senha</label>
			        			<input type="password" name="modalSenha" class="form-control">
			        		</div>
			        	</div>
			        <!-- o formulario fecha fora desta div -->
			      </div>
				      <div class="modal-footer" id="footerModal">
				        <button type="submit" class="btn" id="btnModalExtra">Entrar</button>
				        <button type="button" class="btn" data-dismiss="modal" id="btnModalFechar">Fechar</button>
				      </div>
			      	</form>
			    </div>
	  		</div>
		</div>

		<!-- Divs principais -->

		<div class="form-row">
		    <div class="col-md-6">
	    		<div id="textoLadoForm">
			    	<h1 id="consultasTextoLadoForm">Consultas</h1>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	    		</div>
	    	</div>

			<div class="col-md-6">
				<form class="formulario" action="inserirConsulta.php" method="POST">
					<legend class="tituloForm textoCentro">AGENDAR CONSULTA</legend>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label class="labelComMargem">Data de Consulta:</label>
							<input type="date" name="data_consulta" class="form-control" required>
	    					<label class="labelComMargem">Orçamento (em R$): </label>
							<input type="text" name="preco" id="preco" value="1500" class="form-control" placeholder="Automático" readonly="" style="cursor: default;">
	    					<label class="labelComMargem">Especificação</label>
	    					<select name="tipo" class="selectEspecificacao form-control" id="tipo" onchange="mudarValor();">
	    						<option selected="" value="Neurológica">Neurológica</option>
	    						<option value="Psiquiátrica">Psiquiátrica</option>
	    						<option value="Cardíaca">Cardíaca</option>
	    						<option value="Odontológica">Odontológica</option>
	    					</select>
	    					<div class="divBotaoEnviar">
	    						<center>
									<input type="submit" name="enviar" class="btn" value="Enviar" id="botaoEnviar">
								</center>
							</div> 				
	    				</div>
	    			</div>
			    </form>
			</div>
		</div>
	</section>

	<!-- Acaba a div do formulário -->

	<!-- Começa a div do mapa -->

	<section class="agendarConsultasMapaFundo">
		<div class="form-row">
			<div class="col-md-7">
				<img src="imagens/agendarConsultasMapa.png" width="90%" height="420">
			</div>
			<div class="col-md-5">
				<hr id="hrMapa">
				<h1 id="umbrellaMapa">Umbrella</h1>
				<h1 id="corporationMapa">Corporation</h1>

				<div class="textosMapa">
					<p><img src="imagens/icones/telefone.png" width="40" height="40"> +1 834 56 78</p>
					<p><img src="imagens/icones/email.png" width="40" height="40"> umbrellacorp@gmail.com</p>
					<p><img src="imagens/icones/relogio.png" width="40" height="40"> Seg-Sex/07:00-18:00</p>
					<p><img src="imagens/icones/localizacao.png" width="40" height="40"> Av. Jabaquara, 1598 - Vila da Saúde, São Paulo - SP</p>				
				</div>
			</div>
		</div>
	</section>

	<!-- Acaba a div do mapa -->

	<!-- Começa a div do Quem Somos -->

	<section class="agendarConsultasQuemSomos">
		<div class="opacidadeQuemSomos form-row">
			<div class="textoQuemSomos col-md-6">
				<h1>Agende a qualquer<br>hora, de qualquer lugar</h1>
				<p id="paragrafoQuemSomos">
					Utilize quando e onde quiser, com total conforto e sem se preocupar com o horário de funcionamento do consultório ou clínica.
				</p>
			</div>
		</div>
	</section>

	<!-- Termina a div do Quem Somos -->

	<!-- Começa o Footer -->

	<footer class="footer">
		<div class="form-group">
			<div class="form-row">
				<div class="form-group col-md-6 emailEnvelope">
					<p id="sejaNotificado">Seja notificado!</p>
					<br>
					<div class="input-group">
						<input type="email" name="emailNotificado" class="emailNotificado" placeholder="Digite seu e-mail!">
						<span class="input-group-addon"><a href="#"><i class="fa fa-envelope-o fa-2x" aria-hidden="true" title="Enviar" id="envelopeEnviar"></i></span></a>
					</div>
				</div>

				<div class="form-group iconesFooter">
					<br>
					<a href="#"><img src="imagens/iconesFooter/twitter.png" width="30" height="30"></a>
					<a href="#"><img src="imagens/iconesFooter/instagram.png" width="30" height="30"></a>
					<a href="#"><img src="imagens/iconesFooter/linkedin.png" width="30" height="30"></a>
					<a href="#"><img src="imagens/iconesFooter/fb.png" width="30" height="30"></a>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-12">
					<hr class="linhas">
				</div>
			</div>
		</div>

		<div class="form-row textoEsquerda">
			<div class="form-group col-md-3">
				<h1><img src="imagens/logop.png" width="40" height="40" style="margin-right: 10px;">Umbrella</h1>
			</div>

			<div class="form-group col-md-3 footerH1">
				<h2>Departamentos</h2>
			</div>

			<div class="form-group col-md-3 footerH1">
				<h2>Endereço</h2>
			</div>

			<div class="form-group col-md-3 footerH1">
				<h2>Links</h2>
			</div>
		</div>

		<div class="form-row textoEsquerda margensDivFooter">
			<div class="form-group col-md-3 divFooter6"></div>
			<div class="form-group col-md-3 divFooter6"><hr class="linhasMenores"></div>
			<div class="form-group col-md-3 divFooter6"><hr class="linhasMenores"></div>
			<div class="form-group col-md-3 divFooter6"><hr class="linhasMenores"></div>
		</div>

		<div class="form-row textoEsquerda divFooter4">
			<div class="form-group col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="form-group col-md-3">
				<p>Neurologia<br>
				Cardiologia<br>
				Ginecologia<br>
				Nefrologia<br>
				Exames<br>
				Medicamentos</p>
			</div>

			<div class="form-group col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="form-group col-md-3">
				<p>Home<br>
				Produtos<br>
				Quem Somos<br>
				Agendar Consulta</p>
			</div>
		</div>
	</footer>

	<!-- Termina o Footer -->

	<!-- Scripts do site -->

	<script type="text/javascript" src="funcoesAgendarConsultas.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Script do menu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').fadeOut();
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').fadeIn();
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <!-- <script>
		document.getElementById("cpf").addEventListener('change', function(event) {
			var r1 = /^(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})$/;
			var r2 = /^(\d{3})(\d{3})(\d{3})(\d{2})$/;

			var valid = r1.test(event.target.value);

			var result = "";

			if(valid) {
				result = event.target.value;
			}
			else {
				var digits = event.target.value.replace(/\D/g, "");

				if(digits.length === 11) {
					result = digits.replace(r2, "$1.$2.$3-$4");
				}
			}

			event.target.value = result;
		});
	</script>

	<script>
		document.getElementById("telefone1").addEventListener('change', function(event) {
			var r1 = /^\((\d{2})\)\s(\d{4})\-(\d{4})$/;
			var r2 = /^(\d{2})(\d{4})(\d{4})$/;

			var valid = r1.test(event.target.value);

			var result = "";

			if(valid) {
				result = event.target.value;
			}else {

				var digits = event.target.value.replace(/\D/g, "");

				if(digits.length === 10) {
					result = digits.replace(r2, "($1) $2-$3");
				}else if(digits.length === 11) {
					var r3 = /^\((\d{2})\)\s(\d{5})\-(\d{4})$/;
					var r4 = /^(\d{2})(\d{5})(\d{4})$/;
					result = digits.replace(r4, "($1) $2-$3");
				}
			}

			event.target.value = result;
		});
	</script> -->
</body>
</html>