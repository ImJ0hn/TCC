<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
  

    <?php include_once('sql.php'); include_once('double-modal/modalExcluir.php');
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

  <!--script nav-->
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
  });

  </script>

    <div class="logoz">
        <img src="logo4.png" alt="">
    </div>

    <div class="navbar">
    <a href="index.php" class="active">Pedidos</a>
    <a href="produtos.php">Produtos</a>
    <a href="Configuração.php">Configurações</a>
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

    <!-- <button class="modal-button" href="#Adicionar">
<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
    </button> -->

    <button class="modal-button" href="#Adicionar">+</button>

    

 


<!-- The Modal -->
<div id="Adicionar" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Adicionar Pedido</h2>
    </div>
    <form method="POST" action="inserir/inserirPedidos.php">

    <div class="modal-body">
    <input type="hidden" class="input-formulario" name="id_produtos">

      <p>Nome do cliente</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="Nome do cliente" name="nm_cliente" required>
      </div>

      <p>Pedido(s)</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="Insira o pedido" name="nm_itens" required>
        <p>Qte.</p>
        <input class="modal-quantidade" type="text" placeholder="Qte. de itens" name="qt_itens" required>
      </div>


      <p>Data do Pedido</p>
      <div class="modal-detail">
        <input class="modal-produto" type="date" placeholder="YYYY-MM-DD" name="dt_pedido" required>
      </div>


      <p>Endereço do cliente</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="Bairro, Rua, numero" name="endereco_cliente">
      </div>


      <p>Preço total</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="0.00" name="total" required>
      </div>


      <p>Data de entrega</p>
      <div class="modal-detail">
        <input class="modal-produto" type="date" placeholder="YYYY-MM-DD" name="dt_entrega">
      </div>


      <p>Status</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="Status" name="status">
      </div>
      <input type="submit" value="Adicionar" name="inserir">
        <!-- 
        Botões exemplos  
        <div class="modal-button">
          <a href="%">ação 1</a>
          <a href="%">ação 2</a>
          <a href="%">ação 3</a>
        </div> -->

    </div>
    </form>
  </div>
</div>

<!-- The Modal -->
<div id="Editar" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Editar Pedido</h2>
    </div>
    <div class="modal-body">
      <p>Nome</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="descrição" name="nome">
      </div>

      <p>Produto/Pedido</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="descrição" name="detalhe1">
        <p>Qte.</p>
        <input class="modal-quantidade" type="text" placeholder="quantidade" name="Pedido">
      </div>


      <p>Data do Pedido</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="YYYY-MM-DD" name="data-pedido">
      </div>


      <p>Endereço do pedido</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="Bairro,Rua,numero" name="endereco">
      </div>


      <p>Preço</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="descrição" name="preco">
      </div>


      <p>Data de entrega</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="YYYY-MM-DD" name="data-entrega" required>
      </div>


      <p>Status</p>
      <div class="modal-detail">
        <input class="modal-produto" type="text" placeholder="status" name="status">
      </div>

      <input type="submit" value="Alterar" name="editar">
      
        <!-- <div class="modal-button">
          <a href="%">ação 1</a>
          <a href="%">ação 2</a>
          <a href="%">ação 3</a>
        </div> -->
    </div>
  </div>
</div>

</div>
    <div class="box">
        <div class="container">
          <main class="grid">

          <?php
          
        while($dadosUsuario = mysqli_fetch_assoc($rPedidos) and $mostrarPedido = mysqli_fetch_assoc($rPedido) and $mostrarQuantidade = mysqli_fetch_assoc($rQt_itens))
        {

          echo "<article>";
          echo "<div class='text'>";
          echo "<h3>Pedido</h3>";

          echo "<p>Nome: ". $dadosUsuario['nm_cliente']. "</p>";
          echo "<p>Pedido: ". $mostrarPedido['nm_itens']. "</p>";
          echo "<p>Quantidade: ". $mostrarQuantidade['qt_itens']. "</p>";
          echo "<p>Data do pedido: ". $dadosUsuario['dt_pedido']. "</p>";
          echo "<p>Endereço do cliente: ". $dadosUsuario['endereco_cliente']. "</p>";
          echo "<p>Preço total: ". $dadosUsuario['total']."</p>";
          echo "<p>Data da entrega: ". $dadosUsuario['dt_entrega']."</p>";
          echo "<p>Status: ". $dadosUsuario['status']. "</p>";
          
          echo "<p class='pConteudo'> <a class='button-alterar' href='PagEditar/EditPedidos.php?id=$dadosUsuario[id_pedidos]'>✎</a>

          <a class='btn-danger' data-bs-toggle='modal' data-bs-target='#$dadosUsuario[id_pedidos]'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
          <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
          </svg>

          </a>

          </p>";

          echo "</article>";

          // Modal para exclusão.

          echo "<div class='modal fade ' id='$dadosUsuario[id_pedidos]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h1 class='modal-title fs-5' id='exampleModalLabel'>Excluir</h1>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'>X</button>
              </div>
              <div class='modal-body'>
                Deseja excluir o pedido de $dadosUsuario[nm_cliente] ?
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn-fechar' data-bs-dismiss='modal'>Fechar</button>
                <a class='btn-deletar' href='deletar/scriptDelPed.php?id=$dadosUsuario[id_pedidos]'>Excluir</a>
              </div>
            </div>
          </div>
        </div>";
        };
        // 
      ?> 
          </main>
      </div>
    </div>
</div>
</div>

<!--script modal-->
<script>
// Get the button that opens the modal
var btn = document.querySelectorAll("button.modal-button");
var btnE = document.querySelectorAll("a.modal-buttonE");
// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

for (var i = 0; i < btnE.length; i++) {
 btnE[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}
</script>

</body>
</html>