    <?php

    try{
    $bdhost = 'localhost:3306';
    $bdUsuario = 'root';
    $bdSenha = 'root';
    $bdNome = 'bdDevDreams';

    $conexao = new mysqli($bdhost, $bdUsuario, $bdSenha, $bdNome);

    }
    catch(Exception $erro){
        header('Location: erro.php');
    }

    


    /*Query dos produtos.*/

    $sProdutos = "SELECT * FROM tb_Produtos";
    $rProdutos = $conexao->query($sProdutos);

    /*Query dos pedidos.*/
    $sPedidos = "SELECT * FROM tb_Pedidos";
    $rPedidos = $conexao->query($sPedidos);

    /*Query do estoque.*/
    $sEstoque = "SELECT * FROM tb_Estoque";
    $rEstoque = $conexao->query($sEstoque);

    /* Query específica para solicitar o pedido do cliente */
    $sPedido = "select nm_itens from tb_Itens inner join tb_Pedidos on tb_Itens.id_itens = tb_Pedidos.id_pedidos;";
    $rPedido = $conexao->query($sPedido);

    /* Query que busca a quantidade de itens encomendados */
    $sQt_itens = "select qt_itens from tb_Itens";
    $rQt_itens = $conexao->query($sQt_itens);

    /* Query dos itens. */
    $sItens = "select nm_itens";



    /* Variáveis que pega os ids da tb_Pedidos */

    $Sid_pedidos = "SELECT id_pedidos FROM tb_Pedidos";
    $Rid_pedidos = $conexao->query($Sid_pedidos);


    ?>