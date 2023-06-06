<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="scripts/scriptLogin.php">
    <div class="main-login">
        <div class="left-login">
            <h1>Bem vindo ao Hermes <br> Seu auxiliar em produtividade</h1>
            <img src="img/Chat bot-cuate.svg" class="left-login-image" alt="mâe-terra">
        </div>
        <div class="right-login">

            <div class="card-login">

                <h1>LOGIN</h1>

                <div class="textfield">
                    <label for="usuario">Nome</label>
                    <input type="text" name="nome" placeholder="Usuário" required>
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <input type="submit" name="submit" value="Login" class="btn-login">

                <label><a href="cadastro.php" style="color: black;">Cadastrar</a></label>
            </div>
        </div>
    </div>
    </form>
</body>
</html>