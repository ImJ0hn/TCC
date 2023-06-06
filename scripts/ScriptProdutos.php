<?php

// Coleta as informações da tb_Produtos e coloca elas em variáveis e exibe os dados no arquivo editProduto.
   
    //  Tire do comentário caso der algum erro ao aparecer as informações nos produtos. 
    // include_once('./sql.php');
    
    if(empty($_GET['id']))
    {
        $nm_produto = 'Selecione um produto';
        $descricao = '';
        $preco = '';
    };

    if(!empty($_GET['id']))
    {
        
    
        $id_produtos = $_GET['id'];

        $sqlSelectID = "SELECT * FROM tb_Produtos WHERE id_produtos = $id_produtos";
        $idProdutoSelect = $conexao->query($sqlSelectID);

        if($idProdutoSelect->num_rows>0)
    {

        while($dadosProdutos = mysqli_fetch_assoc($idProdutoSelect))
        {
          
            $id_produtos = $dadosProdutos['id_produtos'];
            $nm_produto = $dadosProdutos['nm_produto'];
            $descricao = $dadosProdutos['descricao'];
            $preco = $dadosProdutos['preco'];

        }
    }

    else
    {
        header('Location: produtos.php');
    }

   


    }


    
   











 ?>