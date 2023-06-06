<?php

// Este arquivo insere as informações dos produtos no banco de dados.
// Este arquivo é usado no action do formulário.

include_once('../sql.php');


if(isset(($_POST['adicionar'])))
{
    $id_produtos = $_POST['id_produtos'];
    $nm_produto = $_POST['nm_produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $insert_tb_Produtos = "INSERT INTO tb_Produtos(nm_produto, descricao, preco)
    VALUES('$nm_produto', '$descricao', '$preco')";
    
    $inserirTb = $conexao->query($insert_tb_Produtos);

}


header('Location: ../produtos.php');





?>