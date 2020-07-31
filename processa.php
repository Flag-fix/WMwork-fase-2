<?php
session_start();
include_once("conexao.php");
// Puxando do campo input nome e email para limpar os dados que vem da VAR sanitize

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Nome: $email <br>";


$result_clientes = "INSERT INTO teste (nome, email, created) VALUES ('$nome', '$email', NOW())";

//Sempre que for usar a VAR conexão usar conn

$result_clientes = mysqli_query($conn, $result_clientes);

if(mysqli_insert_id($conn)){
    $_SESSION['msg']= "<p style='color:green;'>Cliente Cadastrado com Sucesso</p>";
    header("Location: cadastrar.php");
}else{
    $_SESSION['msg']= "<p style='color:red;'>Cliente Não foi Cadastrado</p>";
    header("Location: cadastrar.php");
}