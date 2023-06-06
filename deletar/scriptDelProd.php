<?php

if(!empty($_GET['id']))
{
    include_once('../sql.php');
    
    $id_produtos = $_GET['id'];

    $sqlSelectIDP = "SELECT * FROM tb_Produtos WHERE id_produtos = $id_produtos";

    $idPSelect = $conexao->query($sqlSelectIDP);
    
    if($idPSelect->num_rows>0)
    {
        $sqlDel = "DELETE FROM tb_Produtos WHERE id_produtos = $id_produtos";

        $delPedido = $conexao->query($sqlDel);

        header('Location: ../produtos.php');
    }

};

?>