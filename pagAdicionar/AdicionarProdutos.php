<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="../style.css">
    <script src="config.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <?php include_once('../sql.php'); include_once('../scripts/ScriptProdutos.php');
    session_start();

    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['nome']);
      unset($_SESSION['senha']);
      header('Location:../login.php');
    }
    ?>
</head>
<body>

    <div class="all">
        <div class="sidebar">
          <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
              <div class="logo_name">DevDreams</div>
              <i class='bx bx-menu' id="btn" ></i>
          </div>
          <ul class="nav-list">
            <li>
              <a href="../index.php">
                <i class='bx bx-home-alt-2'></i>
                <span class="links_name">Home</span>
              </a>
               <span class="tooltip">Home</span>
            </li>
           <li>
             <a href="../produtos.php">
               <i class='bx bx-notepad' ></i>
               <span class="links_name">Produtos</span>
             </a>
             <span class="tooltip">Produtos</span>
           </li>
           <li>
             <a href="../Configuração.php">
               <i class='bx bx-cog' ></i>
               <span class="links_name">Configurações</span>
             </a>
             <span class="tooltip">Configurações</span>
           </li>

           <li>

       <form action="../scripts/scriptDeslogar.php" method="POST">
       <button type="submit" style="border:none; background-color:transparent;">
        <a href="">
          <i class='bx bx-alt-2'>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg>
          </i>
        </a>
         <span class="tooltip">Sair</span>
         </button>
         </form>

      </li> 

           <li class="profile">
               <div class="profile-details">
                 <!--<img src="profile.jpg" alt="profileImg">-->
                 <div class="name_job">
                   <div class="name">DevDreams</div>
                   <div class="job">Soluções</div>
                 </div>
               </div>
               <i class='bx bx-cake' id="log_out" ></i>
           </li>
          </ul>
        </div>
      
        <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");
      
        closeBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
        });
      
        </script>


    <div class="main-produto">
    <form method="POST" action="../inserir/inserirProdEdit.php">
        <div class="right-produtoMobile">
        
        
            <div class="detalhes">
              <div class="content">
              
                <p></p>
                <h1>Adicionar</h1>
                <p>Nome do produto</p>
                <input type="hidden" class="input-formulario" name="id_produtos">
                <input type="text" placeholder="Nome do produto" name="nm_produto">
                <p>Preço</p>
                <input type="text" placeholder="Preço" name="preco">
                <p>Descrição</p>
                <input type="text" placeholder="Descrição" name="descricao">
                  <div class="detalhes-button">
                    
                  <input type="submit" value="Adicionar" name="adicionar">
                  </div>
              </div>
              
            </div> 
      </form>
        </div>
    
      


        <div class="left-produto">
            <div class="lista">
            <h1>Produtos</h1>
              <div class="tab">
                <div class="tabs-duo">
                  <button id="WHYYY" class="tab-button" name="tab-buttons"><a href="../produtos.php">Produtos</a></button>
                  <button id="WHYYY" class="tab-button-active" name="tab-buttons"><a href="AdicionarProdutos.php">Adicionar produtos</a></button>
                  <button class="tab-button" name="tab-buttons"><a href="../armazem.php">Estoque</a></button>
                  <button class="tab-button" name="tab-buttons"><a href="AdicionarEstoque.php">Adicionar no Estoque</a></button>
                  <button id="WHYYY" class="tab-button" name="tab-buttons"><a href="../index.php">Pedidos</a></button>
                  <button id="WHYYY" class="tab-button" name="tab-buttons"><a href="../Configuração.php">Configurações</a></button>
                </div>
              </div>
            <?php

while($dadosProdutos = mysqli_fetch_assoc($rProdutos))
{
  echo "<div class='linha'>";
  echo "<div class='linha-titulo'>";
  echo "<p>". $dadosProdutos['nm_produto']. "</p>";

  
  echo "<a class='btn btn-primary' href='../produtos.php?id=$dadosProdutos[id_produtos]'>
  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
  </svg>
  </a>";

  echo "</div>";
  
  echo "<div class='linha-descricao'>";
  echo "<p>R$: ". $dadosProdutos['preco']. "</p>";
  
  echo "<p>|". $dadosProdutos['descricao']."</p>";

  echo "<a class='btn btn-danger' href='../deletar/scriptDelProdAdic.php?id=$dadosProdutos[id_produtos]''>
  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
  </svg>
  </a>";
  
  echo "</div>";
  echo "</div>";
  
};

?>
              
            </div>
        </div>

        

        <div class="right-produto">
        
        <form method="POST" action="../inserir/inserirProdEdit.php" class="right-produto">
        <div class="detalhes">
          <div class="content">
          
            <p></p>
            <h1>Adicionar</h1>
            <p>Nome do produto</p>
            <input type="hidden" class="input-formulario" name="id_produtos">
            <input type="text" placeholder="Nome do produto" name="nm_produto" required>
            <p>Preço</p>
            <input type="text" placeholder="Preço" name="preco" required>
            <p>Descrição</p>
            <input type="text" placeholder="Descrição" name="descricao">
              <div class="detalhes-button">
                
              <input type="submit" value="Adicionar" name="adicionar">


              </div>

         
          </div>
          
        </div> 
        </form>
    </div>

    </div>
        </div>
  </div>
  </div>


</body>
</html>