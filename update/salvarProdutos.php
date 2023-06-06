<?php

// Código que atualiza as informações do produto banco de dados.

include_once('../sql.php');

if(empty($_GET['id']))
{
    header('Location: ../produtos.php');
}


if(isset(($_POST['editar'])))
{
    $id_produtos = $_POST['id_produtos'];
    $nm_produto = $_POST['nm_produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];


    $edit_tb_Produtos = "UPDATE tb_Produtos SET nm_produto = '$nm_produto', descricao = '$descricao', preco = '$preco'
    WHERE id_produtos = '$id_produtos'";
    


    $atualizarTb = $conexao->query($edit_tb_Produtos);

    header('Location: ../produtos.php');

}

?>