<?php

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

        header('Location: ../armazem.php');
    }

}

?>