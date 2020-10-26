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
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estiloIndex.css">
</head>
<body>
  <button id="myBtn" style="float: right;">Open Modal</button>

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
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nome" value="<?php echo "$n"; ?>" readonly="">
            <label>Preço do Produto</label>
            <input type="text" class="form-control" name="preco" value="<?php echo "$p"; ?> " readonly="">
            <input type="button" name="aumentar" value="+" onclick="adicionar<?php echo "$cont"; ?>()">
            <input type="button" name="diminuir" value="-" onclick="remover<?php echo "$cont"; ?>()">
            <label>Quantidade de Produtos</label>
            <input type="text" id="<?php echo "$cont"; ?>" name="qtd" value="1" readonly="">
              <form action="retiraProduto.php" method="POST">
                <label>Código do Produto</label>   
                <input type="text" class="form-control" name="id" value="<?php echo "$id"; ?>" readonly="">
                <input type="button" value="Remover Produto" onclick="retirar();">
              </form>
            <?php
              }
            ?> 
          </ul>

          <ul class="list-unstyled CTAs">
            <li> 
              <a class="article"><input type="submit" name="comprar" value="Comprar"></a>
            </li>
          </ul>
        </form>

        <form action="limparCarrinho.php" method="POST">
          <input type="submit" name="limparcarrinho" value="Remover todos os produtos do carrinho">
        </form>
      </nav>
    </div>
  </div>

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