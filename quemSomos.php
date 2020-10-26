<!DOCTYPE html>
<html>
<head>
    <title>Quem Somos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">
    <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    <link rel="stylesheet" type="text/css" href="css/cssMenu.css">
    <!-- Bootstrap do Carrossel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="divDoMenuFixo">
        <!-- Icone do Menu -->
        <div id="content">
            <nav class="navbar navbar">
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
                        <li class="active">
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

    <!-- Começa a div do Quem Somos -->
    <section class="quemSomosQuemSomos">

        <div class="form-row">
            <div class="col-md-4 quemSomosDivLado">
                <div class="titulo">
                    <h1 id="tituloQuem">Quem</h1><h1 id="tituloSomos">Somos</h1>
                </div>
                <p class="textoDivLado">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        
    </section>

    <!-- Termina a div do Quem Somos -->

    <section class="quemSomosNossoTime">
        <div class="form-row nomeNossoTime">
            <div class="col-md-10">
                <h1><mark class="markNosso">Nosso</mark><mark class="markTime"> Time</mark></h1>
                <hr id="hrNossoTime">
            </div>
        </div>

        <div class="form-row imagensNossoTime">
            <div class="col-md-4">
                <img src="imagens/realizadores/andrew.jpg" width="350" height="280">
                <h2 class="nomesImagens">Andrew Monteiro</h2>
                <h2 class="funcoesImagens">Neurocirurgião</h2>
                <p class="textosImagens">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="col-md-4">
                <img src="imagens/realizadores/leandro.jpg" width="350" height="280">
                <h2 class="nomesImagens">Vitor Lucas</h2>
                <h2 class="funcoesImagens">Enfermeiro</h2>
                <p class="textosImagens">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="col-md-4">
                <img src="imagens/realizadores/nalyson.jpg" width="350" height="280">
                <h2 class="nomesImagens">Herberth Richards</h2>
                <h2 class="funcoesImagens">Cardiologista</h2>
                <p class="textosImagens">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="col-md-4">
                <img src="imagens/realizadores/nalyson.jpg" width="350" height="280">
                <h2 class="nomesImagens">Samuel Miguel</h2>
                <h2 class="funcoesImagens">Oftalmologista</h2>
                <p class="textosImagens">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="form-row nomeNossoTime">
            <div class="col-md-10">
                <hr id="hrNossoTime">
            </div>
        </div>
    </section>

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

    <!-- Script Carrossel -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

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
</body>
</html>