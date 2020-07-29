<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit-no">
    <title>Sistema</title>
    <!-- Links bibliotecas -->
    <link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin.min.css">
    <link rel="stylesheet" href="css/search.css">

    <!-- Logando no sistema -->
    <?php

    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location:login.php");
    }
    ?>

</head>

<body class="bg-dark fixed-nav sticky-footer" id="page-top">
    <!-- Navegacao -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="home.php">Painel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarPainel" aria-control="navbarPainel" aria-expanded="false" aria-label="Navegação Toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarPainel" class="collapse navbar-collapse">
            <ul class="navbar-nav navbar-sidenav" id="linksaccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="painel.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="tabs.php">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text">Clientes</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapse" href="#linkscomponentes" data-toggle="collapse" data-parent="#linksaccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Gestão</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="linkscomponentes">
                        <li>
                            <a href="#link3nivel" class="nav-link-collapse collapse" data-toggle="collapse">Cadastrar</a>
                            <ul class="sidenav-third-level collapse" id="link3nivel">
                                <li>
                                    <a href="#link4nivel" class="nav-link-collapse collapse" data-toggle="collapse">Clientes</a>
                                    <ul class="sidenav-third-level collapse" id="link4nivel">
                                        <li>
                                            <a href="#">Cadastro</a>
                                        </li>
                                        <li>
                                            <a href="#">Alteração</a>
                                        </li>
                                        <li>
                                            <a href="#">Exclusão</a>
                                        </li>
                                    </ul>
                                    <a href="#link4-1nivel" class="nav-link-collapse collapse" data-toggle="collapse">Fornecedores</a>
                                    <ul class="sidenav-third-level collapse" id="link4-1nivel">
                                        <li>
                                            <a href="#">Cadastro</a>
                                        </li>
                                        <li>
                                            <a href="#">Alteração</a>
                                        </li>
                                        <li>
                                            <a href="#">Exclusão</a>
                                        </li>
                                    </ul>
                                    <a href="#link4-2nivel" class="nav-link-collapse collapse" data-toggle="collapse">Equipamentos</a>
                                    <ul class="sidenav-third-level collapse" id="link4-2nivel">
                                        <li>
                                            <a href="#">Cadastro</a>
                                        </li>
                                        <li>
                                            <a href="#">Alteração</a>
                                        </li>
                                        <li>
                                            <a href="#">Exclusão</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#link5nivel" class="nav-link-collapse collapse" data-toggle="collapse">Relatório</a>
                            <ul class="sidenav-third-level collapse" id="link5nivel">
                                <li>
                                    <a href="#">Clientes</a>
                                </li>
                                <li>
                                    <a href="#">Fornecedores</a>
                                </li>
                                <li>
                                    <a href="#">Equipamentos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#link6nivel" class="nav-link-collapse collapse" data-toggle="collapse">Chamados</a>
                            <ul class="sidenav-third-level collapse" id="link6nivel">
                                <li>
                                    <a href="#">Abertura</a>
                                </li>
                                <li>
                                    <a href="#">Em Atendimento</a>
                                </li>
                                <li>
                                    <a href="#">Fechados</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Diminuir menu pra esquerda -->
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a id="sidenavToggler" class="nav-link text-center">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Mostrar nome de Usuário Logado -->
                <li class="nav-item">
                    <a class="nav-link mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user"></i>
                        <?php echo $_SESSION["usuario"];
                        ?>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">
                            Alertas
                            <span class="badge badge-pill badge-warning">5 Itens</span>
                        </span>
                        <span class="indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">Novos Alertas</h6>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-fw fa-long-arrow-up"></i>
                                    Update
                                </strong>
                            </span>
                            <span class="small float-right text-muted">14:30</span>
                            <div class="dropdown-message small">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae doloribus cupiditate facilis recusandae et at exercitationem blanditiis. Omnis odio, ut deserunt blanditiis labore saepe necessitatibus ipsa iure repellat quam dicta?
                            </div>
                            <div class="dropdown-divider"></div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <span class="text-danger">
                                <strong>
                                    <i class="fa fa-fw fa-long-arrow-down"></i>
                                    Update
                                </strong>
                            </span>
                            <span class="small float-right text-muted">14:30</span>
                            <div class="dropdown-message small">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae doloribus cupiditate facilis recusandae et at exercitationem blanditiis. Omnis odio, ut deserunt blanditiis labore saepe necessitatibus ipsa iure repellat quam dicta?
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item small">Ver todos os Alertas</a>
                        </a>
                    </div>
                </li>

                <!-- Botão De Buscar diferenciado -->
                <!-- <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="search__wrapper">
                            <input type="text" name="" placeholder=" Buscar" class="search__field"
                                style="background-color: transparent;">
                            <button type="submit" class="fa fa-search search__icon"></button>
                        </div>
                    </form>
                </li> -->

                <!-- Barra de Pesquisa -->
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquisar ...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>

                <!-- Botão Sair -->
                <li class="nav-item">
                    <a class="nav-link" href="sair.php">
                        <i class="fa fa-sign-out">Sair</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Área de Dashboard -->
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="home.php">Home</a>
                </li>
                <li class="breadcrumb-item">
                    Cards
                </li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1>Cards</h1>
                </div>
            </div>

            <!-- Iniciando Cards em Fileiras -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card tex-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">
                                30 Mensagens
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card tex-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">
                                10 Novas Tarefas
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card tex-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">
                                212 Vendas
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card tex-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">
                                20 Novos Tickets
                            </div>
                        </div>
                        <a href="#" class="card-footer text-white clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Copyright -->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright Isac Bandeira 2020</small>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts Bibliotecas -->
    <script src="bibliotecas/jquery/jquery.min.js"></script>
    <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js" text="text/javascript"></script>
</body>

</html>