<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="scripts/scriptCadastro.php">

    <div class="main-login">
        <div class="right-login">

            <div class="card-login">

                <h1>Cadastro</h1>


                <div class="textfield">
                    <label for="usuario">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" required>
                </div>

                <div class="textfield">
                    <label for="usuario">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>

                <div class="textfield">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" placeholder="Telefone" required>
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required> 
                </div>

                <input type="submit" class="btn-login" name="submit" value="Cadastrar">

                <label><a href="login.php" style="color: black;">Login</a></label>

            </div>
        </div>
    </div>
</form>
</body>
</html>