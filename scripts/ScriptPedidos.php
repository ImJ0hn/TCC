<?php

// Coleta as informações da tb_Pedidos e armazena elas em variáveis e exibe os dados no arquivo editPedidos.

if(!empty($_GET['id']))
{
    include_once('../sql.php');
    
    $id_pedidos = $_GET['id'];

    $sqlSelectID = "SELECT * FROM tb_Pedidos where id_pedidos = $id_pedidos";
    $sqlSelectPEDIDO = "SELECT nm_itens from tb_Itens WHERE id_itens = $id_pedidos";
    $sqlSelectQt_itens = "SELECT qt_itens FROM tb_Itens WHERE id_itens = $id_pedidos";

    

    $idSelect = $conexao->query($sqlSelectID);
    $pedidoSelect = $conexao->query($sqlSelectPEDIDO);
    $qt_itensSelect = $conexao->query($sqlSelectQt_itens);

    if($idSelect->num_rows>0)
    {

        while($dadosUsuario = mysqli_fetch_assoc($idSelect) and $mostrarPedido = mysqli_fetch_assoc($pedidoSelect) and 
        $mostrarQuantidade = mysqli_fetch_assoc($qt_itensSelect))
        {
            
            $id_pedidos = $dadosUsuario['id_pedidos'];
            $nm_cliente = $dadosUsuario['nm_cliente'];
            $nm_itens = $mostrarPedido['nm_itens'];
            $qt_itens = $mostrarQuantidade['qt_itens'];
            $dt_pedido = $dadosUsuario['dt_pedido'];
            $endereco_cliente = $dadosUsuario['endereco_cliente'];
            $total = $dadosUsuario['total'];
            $dt_entrega = $dadosUsuario['dt_entrega'];
            $status = $dadosUsuario['status'];
        }
    }

}


 ?>