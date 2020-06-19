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

</head>

<body class="bg-dark fixed-nav sticky-footer" id="page-top">
    <!-- Logando no sistema -->

    <?php

    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location:login.php");
    }
    ?>

    <!-- Navegacao -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="painel.php">Painel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarPainel" aria-control="navbarPainel" aria-expanded="false" aria-label="Navegação Toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarPainel" class="collapse navbar-collapse">
            <ul class="navbar-nav navbar-sidenav">
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text">Tabelas</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Componentes</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-file"></i>
                        <span class="nav-link-text">Páginas</span>
                    </a>
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
        </div>
        <br>
        <a href="" style="width: 68px; height: 35px; " >
            <span class="fa fa-user" aria-hidden="true"></span>
            <?php echo $_SESSION["usuario"]; ?>

        </a>
        <ul class="navbar-nav -ml-auto">
            <li class="">

            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="search__wrapper">
                        <input type="text" name="" placeholder=" Buscar" class="search__field" style="background-color: transparent;">
                        <button type="submit" class="fa fa-search search__icon"></button>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sair.php">
                    <i class="fa fa-sign-out">Sair</i>
                </a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="painel.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    Página em Branco
                </li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1>Eu te amo muito</h1>
                    <p>E desculpa de novo por hoje ! TE AMO</p>
                </div>
            </div>
        </div>
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