<?php

// Código que atualiza as informações do estoque no banco de dados.

include_once('../sql.php');

if(empty($_GET['id']))
{
    header('Location: ../armazem.php');
}


if(isset(($_POST['editar'])))
{
    $id_estoque = $_POST['id_estoque'];
    $nm_produto = $_POST['nm_produto'];
    $descricao = $_POST['descricao'];
    $qt_estoque = $_POST['qt_estoque'];
    $validade = $_POST['validade'];


    $edit_tb_Estoque = "UPDATE tb_Estoque SET nm_produto = '$nm_produto', descricao = '$descricao', qt_estoque = '$qt_estoque', validade = '$validade' 
    WHERE id_estoque = '$id_estoque'";


    $atualizarTb = $conexao->query($edit_tb_Estoque);

    header('Location: ../armazem.php');
}










?>