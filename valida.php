<?php


    try
    {
        // Conexao com o banco
        $base= new PDO("mysql:host=localhost:3308;dbname=wmwork", "root", "");

        // Criando VAR Base
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        // Chamando SELECT no Banco
        $sql="SELECT * from login WHERE usuario= :usuario AND password= :password";

        //Criando VAR para preparar a conexão e receber a tabela do BD
        $resultado=$base->prepare($sql);
        $usuario=($_POST["usuario"]);
        $password=($_POST["password"]);

        //Recebendo os Valores        
        $resultado->bindValue("usuario",$usuario);
        $resultado->bindValue("password",$password);

        //Executando a VAR
        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if($numero_registro != 0)
        {
            echo "<h2>Logado com Sucesso</h2>";
        }else
        {
            header("Location:login.php");

        }


    } catch(Exception $e)
    {
        die("Error" . $e->getMessage());
    }

?>