<?php

// Este arquivo insere as informações dos pedidos no banco de dados.
// Este arquivo é usado no action do formulário.

include_once('../sql.php');


if(isset(($_POST['inserir'])))
{
    $id_pedidos = $_POST['id_produtos'];
    $nm_cliente = $_POST['nm_cliente'];
    $nm_itens = $_POST['nm_itens'];
    $qt_itens = $_POST['qt_itens'];
    $dt_pedido = $_POST['dt_pedido'];
    $endereco_cliente = $_POST['endereco_cliente'];
    $total = $_POST['total'];
    $dt_entrega = $_POST['dt_entrega'];
    $status = $_POST['status'];

    $insert_tb_Pedidos = "INSERT INTO tb_Pedidos(nm_cliente, dt_pedido, endereco_cliente, total, dt_entrega, status)
    VALUES('$nm_cliente', '$dt_pedido', '$endereco_cliente', '$total', '$dt_entrega', '$status')";
    
    $insert_tb_Itens = "INSERT INTO tb_Itens(nm_itens, qt_itens, preco_itens)
    VALUES('$nm_itens', '$qt_itens', '$total')";

    $inserirTb = $conexao->query($insert_tb_Pedidos);
    $inserirTbItens = $conexao->query($insert_tb_Itens);
};


header('Location: ../index.php');





?>