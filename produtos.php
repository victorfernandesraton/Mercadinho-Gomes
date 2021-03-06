<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mercadinho Gomes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="icones/online-shopping.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        <!-- Hover.css -->
        <link rel="stylesheet" href="css/hover-min.css">
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.min.css">
        
        <!-- CSS do Desenvolvedor -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsiveContato.css">
        <link rel="stylesheet" type="text/css" href="css/styleNavbar.css">
        <link rel="stylesheet" type="text/css" href="css/styleProdutos.css">
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top cor-navbar">  
                <div class="container">
                    <a class="navbar-brand" href=""><img src="icones/logo.png" width="150"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <img src="icones/menu.png" width="30">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="QuemSomos.php">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="produtos.php">Produtos</a>
                                <div class="pg-atual"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="usuarios.php">Usuários</a>
                            </li>
                        </ul>
                    </div>
                </div>    
            </nav>
        </header>

        <!-- Contato-nos -->
        <?php
            require_once "Templates/contate-nos.php"
        ?>
        <!-- Fim de Contate-nos -->

        <!-- Produtos -->
        <div class="container mg-mobile">
            <div class="row">
                <div class="col-sm-12">
                    <h1>PRODUTOS</h1>
                </div>
                <div class="produtos">
                    <div class="row my-5">
                        <div class="row col-12 col-md-12 col-lg-6 col-sm-12 mb-3 text-center justify-content-start">
                            <div class="col-1 mr-5">Categoria</div>
                            <select class="col-5 ml-3 btn-cadastro" name="" id="">
                                <option value="">CATEGORIAS</option>
                            </select>
                        </div>
                        <div class="row col-12 col-md-12 col-lg-6 col-sm-12 text-center justify-content-start">
                            <div class="col-1 mr-5">Pesquisa</div>
                            <form action="" method="POST" name="pesquisa">
                                <input type="text" class="col btn-cadastro">
                            </form>
                        </div>
                    </div>
                    <div class="container">
                        <form action="" method="POST">
                            <div class="row mb-4">
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                            <!-- </div>
                            <div class="row mb-4"> -->
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                            <!-- </div>
                            <div class="row mb-4"> -->
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                            <!-- </div>
                            <div class="row mb-4"> -->
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                                <div class="col-md-4 col-12 col-sm-6 justify-content-center text-center my-3">
                                    <label for="" class="image-checkbox">
                                        <img class="img-fluid img-produtos" src="img/197119-qual-a-importancia-de-ter-os-expositores-certos-para-hortifruti.jpg"
                                            alt="" width="300">
                                        <input type="checkbox" name="produto[]" id="nomedoproduto">
                                        <i><img class="imagem" src="icones/checked.png" alt=""></i>
                                    </label>
                                    <p>Quantidade: ___</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 hvr-bounce-out">
                                    <div class="caixaInput">
                                        <input type="button" value="Limpar Seleção" class="btn-login" onclick="history.go(0)">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 hvr-bounce-in">
                                    <div class="caixaInput">
                                        <input type="submit" value="Fazer Pedido" class="btn-login">
                                    </div>
                                </div>
                            </div>  
                        </form>

                    </div>
                </div>
            </div>
        </div>

        

        

        <!-- Footer -->
        <footer>
        <?php
            require_once "Templates/footer.php";
        ?>
        </footer>
        <!-- Fim do Footer -->

        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/functions.js"></script>
    </body>

</html>