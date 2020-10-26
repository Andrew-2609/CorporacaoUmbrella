<?php include_once('conexao.php');
  class resultados{

    private $nome;
    private $preco;

    public function setNome($nome){
      $this->nome = $nome;
    }
    public function getNome(){
      return $this->nome;
    }
    public function setPreco($preco){
      $this->preco = $preco;
    }
    public function getPreco(){
      return $this->preco;
    }
    public function setId($id){
      $this->id = $id;
    }
    public function getId(){
      return $this->id;
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Medicamentos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">
	<link rel="stylesheet" type="text/css" href="css/cssCarrinho.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cssMenu.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		#myBtn {
			margin-top: 10px;
			background-color: rgba(255,255,255,0.8);
			border: 2px solid black;
			color: rgb(1,168,158);
			transition: 0.5s all ease;
		}

		#myBtn:hover {
			transition: 0.5s all ease;
			background-color: black;
			color: white;
			border: 1px solid white;
		}

		.conteudoModal {
			background-color: rgba(0,0,0,0.5);
			color: white;
			/*margin: 15% auto;*/
			margin-top: 10%;
			padding: 20px;
		  	border: 1px solid #888;
		  	width: 80%;
		  	display: block;
		}

		.comprarModal {
			background-color: white;
			border: 2px solid white;
			color: black;
			border-radius: 5px;"
			transition: all 1s ease;
		}

		.comprarModal:hover {
			color: white;
			background-color: black;
			border: 2px solid black;
			transition: all 1s ease;
		}

		.removerTudoModal {
			background-color: white;
			border: 2px solid white;
			color: black;
			border-radius: 5px;"
			transition: all 1s ease;	
		}

		.removerTudoModal:hover {
			color: white;
			background-color: black;
			border: 2px solid black;
			transition: all 1s ease;
		}

	</style>
</head>
<body>
	<!-- Começa a div do modal -->
	<button id="myBtn" style="margin-left: 94%; position: absolute; z-index: 900;"><i class="fa fa-shopping-cart fa-4x iconeCarrinho"></i></button>
  	<div id="myModal" class="modal">
	    <!-- Contéudo do modal -->
	    <div class="modal-content conteudoModal">
	      <span class="close">&times;</span>
	      <nav>
	        <form method="POST" action="inserirMedicamentos.php">
	          <ul class="list-unstyled components">
	            <h1>Carrinho</h1>
	            <?php
	              $sql = 'SELECT * FROM carrinho';
	              $resul = mysqli_query($conexao, $sql);
	              $resultados = new resultados();
	              $cont = 0;
	                        
	              while($dados = mysqli_fetch_array($resul)) {
	                $cont ++;
	                $n = $dados['nomeProduto'];
	                $p = $dados['precoProduto'];
	                $id = $dados['id'];
	                $resultados->setNome($n);
	                $resultados->setPreco($p);
	                $resultados->setId($id);
	            ?>
	            <label>Nome do Produto:</label>
	            <input type="text" class="inputsModal" name="nome" value="<?php echo "$n"; ?>" readonly="">
	            <br>
	            <label>Preço do Produto:</label>
	            <input type="text" class="inputsModal" name="preco" value="<?php echo "$p"; ?> " readonly="">
	            <label>Quantidade de Produtos:</label>
	            <input type="button" name="aumentar" value="+" onclick="adicionar<?php echo "$cont"; ?>()">
	            <input type="text" class="inputsModal" style="text-align: center;" id="<?php echo "$cont"; ?>" name="qtd" value="1" readonly="">
	            <input type="button" name="diminuir" value="-" onclick="remover<?php echo "$cont"; ?>()">
	            <br>
	            <!-- <form action="retiraProduto.php" method="POST"> -->
	              <input type="text" name="id" style="display: none;" value="<?php echo "$id"; ?>">
	              <!-- <input type="button" value="Remover Produto" onclick="retirar();"> -->
	            <!-- </form> -->

	            <hr style="border: 2px solid white">
	            <?php
	              }
	            ?> 
	          </ul>

	          <ul class="list-unstyled CTAs">
	            <li> 
	              <a class="article"><input type="submit" name="comprar" class="comprarModal" value="Comprar"></a>
	            </li>
	          </ul>
	        </form>

	        <form action="limparCarrinho.php" method="POST">
	          <input type="submit" name="limparcarrinho" class="removerTudoModal" value="Remover todos os produtos do carrinho">
	        </form>
	      </nav>
	    </div>
  	</div>

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

	<section class="sessao1">
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
			                <li class="active">
			                    <a href="medicamentos.php">Produtos</a>
			                </li>
			                <li>
			                    <a href="quemSomos.php">Quem Somos</a>
			                </li>
			                <li>
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

		<!-- Fim do modal -->

		<div class="form-row divProdutosImagem">
			<div class="col-md-6 imagemMedicamentos">
				<img src="imagens/medicamentos/wallpaperMedicamentos.gif" width="200%" height="680">
			</div>

			<div class="col-md-6 produtosLado">
				<h1 id="tituloProdutos">Produtos</h1>
				<p class="textoProdutos">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>

	<section class="sessao2">
		<hr class="hrComprasDe">
		<div class="form-row comprasAcima">
			<div class="col-md-12">
				<div class="form-row">
					<div class="col-md-3">
						<br>
						<h6>Em compras acima de R$ 100</h6>
					</div>

					<div class="col-md-3">
						<img src="imagens/icones/dercosmeticos.png" width="50" height="50" class="imagensComprasDe">
						<mark class="tituloMark">DERMOCOSMÉTICOS</mark>
					</div>

					<div class="col-md-3">
						<img src="imagens/icones/programaDescontos.png" width="50" height="50" class="imagensComprasDe">
						<mark class="tituloMark">PROGRAMA DE DESCONTOS</mark>
					</div>

					<div class="col-md-3">
						<img src="imagens/icones/cliqueRetire.png" width="50" height="50" class="imagensComprasDe"></h6>
						<mark class="tituloMark">CLIQUE E RETIRE</mark>
					</div>
				</div>
			</div>
		</div>
		<hr class="hrComprasDe">
	</section>

	<section class="sessao3">
		<div class="form-row" id="descontos">
			<div class="col-md-12" id="divDesconto1">
				<img src="imagens/desconto1.jpg" width="550" height="320" style="margin: 2.5%;border-radius: 10px;">
				<img src="imagens/desconto2.jpg" width="550" height="320" style="border-radius: 10px;">
			</div>
		</div>
	</section>

	<section class="sessao4">
		<div class="form-row">
			<div class="col-md-12" style="text-align: center;">
				<h1 id="tituloCompras">Medicamentos e Saúde</h1>
			</div>
		</div>

		<form class="formularioProdutos" action="inserirCarrinho.php" method="POST">
			<div class="form-row divLinhasProtudos" style="width: 100%; margin-left: 11%;">
				<div class="col-md-3 divProdutos">
					<img src="imagens/medicamentos/analgesico.png" width="180" height="200">
					<input type="text" name="nomeProduto" value="Analgésico Antitérmico 500mg/mL" class="inputNomeProduto" readonly="">
					<br>
					<p class="simboloRs">R$:</p>
					<input type="text" name="precoProduto" value="25" class="inputPrecoProduto" readonly="">
					<br>
					<input type="submit" name="enviar" value="Comprar" class="inputsComprar">
				</div>

				<div class="col-md-3 divProdutos">
					<img src="imagens/medicamentos/cloridrato.png" width="180" height="200">
					<h5>Cloridrato de Ambroxol 15mg/5mL</h5>
					<h4>R$13</h4>
					<input type="button" name="cloridrato" value="Comprar" class="inputsComprar">
				</div>

				<div class="col-md-3 divProdutos">
					<img src="imagens/medicamentos/dipimed.png" width="180" height="200">
					<h5>Dipirona Monoidrata Dipimed 500mg/mL</h5>
					<h4>R$09</h4>
					<input type="button" name="dipirona" value="Comprar" class="inputsComprar">
				</div>
			</div>
			<br>
			<div class="form-row" style="width: 100%; margin-left: 11%;">
				<div class="col-md-3 divProdutos">
					<img src="imagens/medicamentos/dipirona.png" width="180" height="200">
					<h5>Dipirona Monoidrata Farmace 500mg/mL</h5>
					<h4>R$15</h4>
					<input type="button" name="dipirona1" value="Comprar" class="inputsComprar">
				</div>

				<div class="col-md-3 divProdutos">
					<img src="imagens/medicamentos/gastrogel.png" width="180" height="200">
					<h5>Gastrogel Fresh 150mL</h5>
					<h4>R$26</h4>
					<input type="button" name="gastrogel" value="Comprar" class="inputsComprar">
				</div>

				<div class="col-md-3 divProdutos">
					<img src="imagens/medicamentos/paracetamol.png" width="180" height="200">
					<h5>Paracetamol 200mg/mL</h5>
					<h4>R$08</h4>
					<input type="button" name="paracetamol" value="Comprar" class="inputsComprar">
				</div>
			</div>

			<!-- Botões de controle -->
			<div class="form-row" style="width: 100%; text-align: center; padding-top: 10px;padding-bottom: 10px;">
				<div class="col-md-12">
					<input type="button" name="anterior" value="Anterior" class="anteriorProximo">
					<button class="botoesProximo">01</button>
					<button class="botoesProximo">02</button>
					<button class="botoesProximo">03</button>
					<button class="botoesProximo">14</button>
					<input type="button" name="anterior" value="Anterior" class="anteriorProximo">
				</div>
			</div>
		</form>
	</section>

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

	<!-- Scripts -->
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

    <!-- Script do modal -->
	<script>
	var modal = document.getElementById("myModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	span.onclick = function() {
	  modal.style.display = "none";
	}

	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
	</script>

	<script type="text/javascript">
	function adicionar<?php echo "$cont"; ?>(){
	  document.getElementById('<?php echo "$cont"; ?>').value ++;
	}

	function remover<?php echo "$cont"; ?>(){
	  if (document.getElementById('<?php echo "$cont"; ?>').value > 1) {
	    document.getElementById('<?php echo "$cont"; ?>').value --;
	  }else{
	    document.getElementById('<?php echo "$cont"; ?>') == 1;
	  }
	}
	</script>
	<!-- Termina o script do modal -->
</body>
</html>