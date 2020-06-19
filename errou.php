<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <title>Login</title>
    <link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="text/css" href="css/sb-admin.min.css">
    <style type="text/css">
        .row {
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="bg-dark">


    <!-- Modal de erro de Login -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Erro</h4>
                            </div>
                            <div class="modal-body">
                                <p>Usuário ou Senha Incorretos</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="w-50 card card-login mx-auto mt-5">
            <h2 class="container"><small>Área Restrita</small></h2>
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="valida.php" method="POST">
                    <div class="form-group">
                        <label for="usuario"> Usuário</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite seu Usuário">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua Senha">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Lembrar Senha
                            </label>
                        </div>
                    </div>
                    <button type="submit" name="entrar" class="btn btn-primary btn-block">Entrar</button>
                    <div class="text-center">
                        <a href="registro.php" class="d-block small mt-3">Registrar-se</a>
                        <a href="recuperar.php" class="d-block small">Esqueceu Senha?</a>
                    </div>


                </form>
            </div>

        </div>

    </div>




    <script src="bibliotecas/jquery/jquery.min.js"></script>
    <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
        $('.modal').modal('show')
    </script>
</body>

</html>