<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="Login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="body-login">
    <div class="forms">
        <form method="POST" class="login-form" id="login-form">
            <a href="./index.php" class="back-links"><i class='bx bx-chevron-left'></i> Voltar</a>
            <h1 class="tit">Login</h1>
            <p class="descrit">Faça login para acessar sua conta.</p>

            <?php if (isset($_GET['erro'])): ?>
                <p class="error-message" style="color: red; text-align: center; margin: 10px 0;">
                    <?php echo htmlspecialchars($_GET['erro']); ?>
                </p>
            <?php endif; ?>

            <div class="input-box">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="input-box">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" id="lembrarSenha"> Lembrar senha</label>
                <a href="esqueceuSenha.php" class="forgot-password">Esqueceu sua senha?</a>
            </div>

            <button type="submit" class="btn">Login</button> 

            <div class="account">
                <h6 class="account-title">Não tem uma Conta?</h6>
                <a class="account-link" href="cadastro.php">Cadastre-se</a>
            </div>
        </form>
    </div>
    <div class="image-container">
        <img src="./src/img/chocolate.jpg" alt="img-login" class="login-image">
    </div>
    <script src="../../../../public/js/lembrarSenhaUser.js"></script>
    <script src="../../../../public/js/login-usuario.js"></script>
</body>
</html>
