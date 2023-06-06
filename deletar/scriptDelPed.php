<?php

// Este arquivo deleta os dados e pedidos de um cliente do banco de dados.

if(!empty($_GET['id']))
{
    include_once('../sql.php');
    
    $id_pedidos = $_GET['id'];

    $sqlSelectID = "SELECT * FROM tb_Pedidos WHERE id_pedidos = $id_pedidos";

    $idSelect = $conexao->query($sqlSelectID);
    
    if($idSelect->num_rows>0)
    {
        $sqlDel = "DELETE FROM tb_Pedidos WHERE id_pedidos = $id_pedidos";
        $sqlDelquant_Pedido = "DELETE FROM tb_Itens WHERE id_itens = $id_pedidos";


        $delPedido = $conexao->query($sqlDel);
        $delquant_Pedido = $conexao->query($sqlDelquant_Pedido);
        
        header('Location: ../index.php');
    }

};




/*

if(!empty($_GET['id']))
{
    include_once('../sql.php');
    
    $id_estoque = $_GET['id'];

    $sqlSelectIDESTO = "SELECT * FROM tb_Estoque WHERE id_estoque = $id_estoque";

    $idESelect = $conexao->query($sqlSelectIDESTO);
    
    if($idESelect->num_rows>0)
    {
        $sqlDel = "DELETE FROM tb_Estoque WHERE id_estoque = $id_estoque";

        $delEstoque = $conexao->query($sqlDel);

        header('Location: ../estoque.php');
    }

}
*/

?>