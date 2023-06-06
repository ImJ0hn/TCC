<?php

// Código que atualiza as informações do cliente e do pedido no banco de dados.

include_once('../sql.php');



if(isset(($_POST['editar'])))
{
    $id_pedidos = $_POST['id_pedidos'];
    $nm_cliente = $_POST['nm_cliente'];
    $nm_itens = $_POST['nm_itens'];
    $qt_itens = $_POST['qt_itens'];
    $dt_pedido = $_POST['dt_pedido'];
    $endereco_cliente = $_POST['endereco_cliente'];
    $total = $_POST['total'];
    $dt_entrega = $_POST['dt_entrega'];
    $status = $_POST['status'];

    $edit_tb_Pedidos = "UPDATE tb_Pedidos SET nm_cliente = '$nm_cliente', dt_pedido = '$dt_pedido', total = '$total', dt_entrega = '$dt_entrega', status = '$status' 
    WHERE id_pedidos = '$id_pedidos'";
    /* edit_Pedido serve para alterar o pedido ['nm_itens']; */
    $edit_Pedido = "UPDATE tb_Itens set nm_itens = '$nm_itens' WHERE id_itens = '$id_pedidos'";
    $edit_Quant = "UPDATE tb_Itens set qt_itens = '$qt_itens' WHERE id_itens = '$id_pedidos'";

    $atualizarTb = $conexao->query($edit_tb_Pedidos);
    $atualizarPedido = $conexao->query($edit_Pedido);
    $atualizarQuant = $conexao->query($edit_Quant);
}

header('Location: ../index.php');







?>