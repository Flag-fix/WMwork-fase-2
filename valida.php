<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit-no">
    <title>Validar Usuário</title>
    <!-- Links bibliotecas -->
    <link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin.min.css">
</head>

<body>
    <?php

    try {
        // Conexao com o banco
        $base = new PDO("mysql:host=localhost:3308;dbname=wmwork", "root", "");

        // Criando VAR Base
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Chamando SELECT no Banco
        $sql = "SELECT * from login WHERE usuario= :usuario AND password= :password";

        //Criando VAR para preparar a conexão e receber a tabela do BD
        $resultado = $base->prepare($sql);
        $usuario = ($_POST["usuario"]);
        $password = ($_POST["password"]);

        //Recebendo os Valores        
        $resultado->bindValue("usuario", $usuario);
        $resultado->bindValue("password", $password);

        //Executando a VAR
        $resultado->execute();

        $numero_registro = $resultado->rowCount();

        if ($numero_registro != 0) {
            echo "<h2>Logado com Sucesso</h2>";

            //Criando Sessão

            session_start();

            $_SESSION["usuario"] = $_POST["usuario"];
            
            header("Location:painel.php");



        } else {
            header("Location:errou.php");
        }

    } catch (Exception $e) {
        die("Error" . $e->getMessage());
    }


    ?>


    <!-- Scripts Bibliotecas -->
    <script src="bibliotecas/jquery/jquery.min.js"></script>
    <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js" text="text/javascript"></script>
</body>

</html>