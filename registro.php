<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <title>Registrar</title>
    <link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="text/css" href="css/sb-admin.min.css">
</head>
<body class="bg-dark">

    <div class="container">
        <div class="w-50 card card-register mx-auto mt-5">
            <div class="card-header">Criar uma Conta</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="PrimeiroNome"> Primeiro Nome</label>
                                <input type="text" class="form-control" id="primeiroNome" placeholder="Digite seu Primeiro Nome">
                            </div>
                            <div class="col-md-6">
                                <label for="Sobrenome"> Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu Sobrenome">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usuario"> Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Digite nome para seu Usuário">
                    </div>
                    <div class="form-group">
                        <label for="email"> E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail">
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="senha"> Senha</label>
                                <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha">
                            </div>
                            <div class="col-md-6">
                                <label for="confirmaSenha">Confirme sua Senha</label>
                                <input type="password" class="form-control" id="confirmaSenha" placeholder="Confirme sua Senha">
                            </div>
                        </div>
                    </div>                    
                    <button class="btn btn-primary btn-block">Registrar-se</button>
                    <div class="text-center">
                        <a href="recuperar.php" class="d-block small mt-3">Esqueceu a senha?</a>
                        <a href="login.php" class="d-block small">Login</a>
                    </div>
                </form> 
            </div>

        </div>
         
    </div>

    

    <script src="bibliotecas/jquery/jquery.min.js"></script>

    <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>