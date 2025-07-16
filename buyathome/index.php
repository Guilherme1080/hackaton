<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Escolha Perfeita</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
    }

    /* NAVBAR */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
      border-bottom: 1px solid #eee;
      background-color: #ffffff;
    }

    .navbar img.logo {
      height: 36px;
    }

    .navbar .title {
      color: #ff8000;
      font-size: 1.2rem;
      font-weight: 600;
    }

    .navbar .coins {
      font-size: 1rem;
      font-weight: 600;
      color: #2e7d32;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .coins img {
      width: 20px;
      height: 20px;
    }

    /* CONTEÚDO */
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 60px;
      padding: 20px;
    }

    .question {
      font-size: 1.3rem;
      margin-bottom: 30px;
      color: #000;
    }

    .options {
      display: flex;
      gap: 20px;
    }

    .option {
      width: 120px;
      height: 50px;
      background-color: #c9a8a8;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.2s;
    }

    .option:hover {
      background-color: #b78e8e;
    }

    /* AJUDA */
    .help-button {
      position: fixed;
      bottom: 20px;
      left: 20px;
      background-color: #e7fff1;
      border: 2px solid #00cc99;
      color: #00cc99;
      padding: 10px 18px;
      border-radius: 8px;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
      font-weight: 500;
      cursor: pointer;
    }

    .help-button:hover {
      background-color: #d1ffeb;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <img src="./img/logo.jpg" alt="BuyAtHome Logo" class="logo">
    <div class="title">Escolha Perfeita</div>
    <div class="coins">
      <img src="coin_icon.png" alt="Moeda"> BuyathCoins: <span id="coin-count">8</span>
    </div>  
  </div>

  <!-- CONTEÚDO PRINCIPAL -->
  <div class="container">
    <div class="question">Qual é o sua Bebida favorita ?</div>
    <div class="options">
      <button class="option"></button>
      <button class="option"></button>
      <button class="option"></button>
      <button class="option"></button>
    </div>
  </div>

  <!-- BOTÃO DE AJUDA -->
  <button class="help-button">Preciso de ajuda ?</button>

</body>
</html>
