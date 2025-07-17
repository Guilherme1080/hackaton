<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BuyAtHome</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <header>
        <img src="./src/img/logo.jpg" alt="BuyAtHome Logo" class="logo">
    </header>

    <main>
        <h2>Digite seu CPF:</h2>
        <input type="text" id="cpf" placeholder="" maxlength="14" oninput="mascaraCPF(this)">

        <div class="links">
            <a href="./login.php">login</a><br>
            <a href="./cadastro.php">nao tenho login ainda</a>
        </div>
    </main>

    <footer>
        <button class="ajuda">Preciso de ajuda ?</button>
        <div class="botoes">
            <a href="./home4.php" class="confirmar"> confirmar</a>
            <button class="negado">não estou interessado</button>
        </div>
    </footer>
    <script src="./index.js"></script>
</body>
</html>
