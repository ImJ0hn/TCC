<?php

// Este arquivo insere as informações do estoque no banco de dados.
// Este arquivo é usado no action do formulário.

include_once('../sql.php');


if(isset(($_POST['inserir'])))
{
    $id_estoque = $_POST['id_estoque'];
    $nm_produto = $_POST['nm_produto'];
    $descricao = $_POST['descricao'];
    $qt_estoque = $_POST['qt_estoque'];
    $validade = $_POST['validade'];

    $insert_tb_Estoque = "INSERT INTO tb_Estoque(nm_produto, descricao, qt_estoque, validade)
    VALUES('$nm_produto', '$descricao', '$qt_estoque', '$validade')";
    
    $inserirTb = $conexao->query($insert_tb_Estoque);

};


header('Location: ../armazem.php');





?>