<?php
session_start();
include_once('../sql.php');



if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
{
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $buscarSenha = "SELECT senha FROM usuarios WHERE nome = '$nome'";
    $senhaHash = $conexao->query($buscarSenha)->fetch_assoc()['senha'];


    if(password_verify($senha, $senhaHash))
    {
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: ../index.php');
    }
    else
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');
    }
}
?>
