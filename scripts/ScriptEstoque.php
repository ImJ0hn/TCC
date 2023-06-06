<?php

// Coleta as informações da tb_Estoque, armazena elas em variáveis e exibe os dados no arquivo editEstoque .

if(empty($_GET['id']))
    {
        $nm_produto = 'Selecione um produto';
        $descricao = '';
        $qt_estoque = '';
        $validade = '00/00/0000';
    };

if(!empty($_GET['id']))
{

    
    $id_estoque = $_GET['id'];

    $sqlSelectID = "SELECT * FROM tb_Estoque WHERE id_estoque = $id_estoque";

    $idSelectEstoque = $conexao->query($sqlSelectID);


    if($idSelectEstoque->num_rows>0)
    {

        while($dadosEstoque = mysqli_fetch_assoc($idSelectEstoque))
        {
            
            $nm_produto = $dadosEstoque['nm_produto'];
            $descricao = $dadosEstoque['descricao'];
            $qt_estoque = $dadosEstoque['qt_estoque'];
            $validade = $dadosEstoque['validade'];
        }
        
    }

    else
    {
        header('Location: armazem.php');
    }

    
    }



 ?>