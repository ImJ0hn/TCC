<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="style.css">
    <script src="config.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <?php include_once('sql.php');
      session_start();

      if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
      {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location:login.php');
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
              <a href="index.php">
                <i class='bx bx-home-alt-2'></i>
                <span class="links_name">Home</span>
              </a>
               <span class="tooltip">Home</span>
            </li>
           <li>
             <a href="produtos.php">
               <i class='bx bx-notepad' ></i>
               <span class="links_name">Produtos</span>
             </a>
             <span class="tooltip">Produtos</span>
           </li>
           <li>
             <a href="Configuração.php">
               <i class='bx bx-cog' ></i>
               <span class="links_name">Configurações</span>
             </a>
             <span class="tooltip">Configurações</span>

             <li>

       <form action="scripts/scriptDeslogar.php" method="POST">
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
      </div>

      <div class="navbar">
    <a href="index.php" >Pedidos</a>
    <a href="produtos.php">Produtos</a>
    <a href="Configuração.php" class="active">Configurações</a>
    <form action="scripts/scriptDeslogar.php" method="POST">
       <button type="submit" style="border:none; background-color:transparent;">
        <a>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg>
        </a>
         </button>
         </form>
  </div>

      <div class="tabs-whole">
        <div class="tab">
          <div class="tabs-duo-config">
            <button id="WHYYY" class="tab-button" name="tab-buttons" onclick="abrirTab(event, 'banco')">Base de dados</button>
            <button class="tab-button" name="tab-buttons" onclick="abrirTab(event, 'bot')" >BOT</button>
          </div>
        </div>

        <div class='tabs-content'>
            <div id="banco" class="bd-content" name="conteudo">
              <div class="divider">
                <div class="bd-left">
                  <p>.....</p>
                  <h1>Banco de dados</h1>
                  <textarea class="bdlines" name="bd-lines" id="bdlines"></textarea>
                </div>
                  <div class="bd-right">
                    <p>detalhe1</p>
                    <input type="text" placeholder="descrição" name="detalhe1">
                    <p>detalhe2</p>
                    <input type="text" placeholder="descrição" name="detalhe2">
                    <p>detalhe3</p>
                    <input type="text" placeholder="descrição" name="detalhe3">
                      <div class="config-button">
                        <a href="%">ação 1</a>
                        <a href="%">ação 2</a>
                        <a href="%">ação 3</a>
                      </div>  
                  </div>
              </div>
            </div>


              <div id="bot" class="bot-content" name="conteudo">
                <div class="divider">
                  <div class="bd-left">
                    <p>.....</p>
                    <h1>Bot Script</h1>
                    <textarea class="bdlines" name="bd-lines" id="bdlines"></textarea>
                  </div>
                    <div class="bd-right">
                      <p>detalhe1</p>
                      <input type="text" placeholder="descrição" name="detalhe1">
                      <p>detalhe2</p>
                      <input type="text" placeholder="descrição" name="detalhe2">
                      <p>detalhe3</p>
                      <input type="text" placeholder="descrição" name="detalhe3">
                        <div class="config-button">
                          <a href="%">ação 1</a>
                          <a href="%">ação 2</a>
                          <a href="%">ação 3</a>
                        </div>  
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>