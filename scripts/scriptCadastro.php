<?php
include_once('../sql.php');

if(isset($_POST['submit']))
{

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $cadas = "INSERT INTO usuarios (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senhaHash')";
    $cadasquery = $conexao->query($cadas);
}

header('Location: ../login.php')

?>