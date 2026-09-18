<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="description" content="Página de Login do festival conexão">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Festival Conexão</title>
    <link rel="shortcut icon" href="assets/conexao.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="mt-5 container d-flex justify-content-center text-center">
        <form action="backend/verificar.php" class="form" method="post">
            <fieldset>

            <legend>Login</legend>

                <div class="form-floating mb-3">
                    <input type="email" name="email" required class="form-control" id="floatingInput" placeholder="Ex.:jonhdoe@gmail.com">
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="senha" required class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </div>
                
                <a href="cadastro.php">Não possui cadastro?Cadastre-se.</a>

            </fieldset>
        </form>

    </main>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>