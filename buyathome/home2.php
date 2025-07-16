<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Cliente - Quiz BuyatCoin</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: #fff8f1;
      color: #333;
      padding: 20px;
    }

    .dashboard {
      max-width: 700px;
      margin: auto;
      background: #ffffff;
      border-radius: 24px;
      box-shadow: 0 4px 15px rgba(255, 186, 123, 0.2);
      padding: 30px;
    }

    .header {
      margin-bottom: 25px;
    }

    .header h2 {
      font-size: 24px;
      color: #ff8a3d;
    }

    .stats {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
      margin: 20px 0;
    }

    .stat-box {
      background: #fff3e0;
      padding: 15px 20px;
      border-radius: 16px;
      flex: 1 1 30%;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .stat-box h4 {
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    .stat-box p {
      font-size: 18px;
      font-weight: 600;
      color: #ff8a3d;
    }

    .quiz {
      margin-top: 30px;
    }

    .question {
      display: none;
      animation: fadeIn 0.4s ease-in-out;
    }

    .question.active {
      display: block;
    }

    .question h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #444;
    }

    .options {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .options button {
      padding: 12px;
      border: none;
      background-color: #ffb97b;
      border-radius: 10px;
      color: #2e2e2e;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .options button:hover {
      background-color: #ffc999;
      transform: scale(1.02);
      box-shadow: 0 3px 8px rgba(255, 186, 123, 0.4);
    }

    .progress {
      margin-top: 30px;
      background: #f0f0f0;
      border-radius: 8px;
      overflow: hidden;
      height: 20px;
    }

    .progress-bar {
      height: 100%;
      width: 40%;
      background-color: #ffb97b;
      transition: width 0.3s ease;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(10px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>

  <div class="dashboard">
    <div class="header">
      <h2>👋 Olá, João!</h2>
      <p>Responda o quiz para ganhar BuyatCoins 🪙</p>
    </div>

    <div class="stats">
      <div class="stat-box">
        <h4>BuyatCoins</h4>
        <p id="coins">0</p>
      </div>
      <div class="stat-box">
        <h4>Total Gasto (Mês)</h4>
        <p>R$ 367,80</p>
      </div>
      <div class="stat-box">
        <h4>Meta p/ Brinde</h4>
        <p>R$ 500</p>
      </div>
    </div>

    <div class="quiz">
      <div class="question active" id="q1">
        <h3>1. Qual tipo de produto você mais consome?</h3>
        <div class="options">
          <button onclick="nextQuestion(1)">Hortifruti</button>
          <button onclick="nextQuestion(1)">Bebidas</button>
          <button onclick="nextQuestion(1)">Snacks</button>
        </div>
      </div>

      <div class="question" id="q2">
        <h3>2. Com que frequência você faz compras?</h3>
        <div class="options">
          <button onclick="nextQuestion(2)">1x por semana</button>
          <button onclick="nextQuestion(2)">2x por mês</button>
          <button onclick="nextQuestion(2)">Todo dia!</button>
        </div>
      </div>

      <div class="question" id="q3">
        <h3>3. O que você mais valoriza em uma promoção?</h3>
        <div class="options">
          <button onclick="finishQuiz()">Desconto alto</button>
          <button onclick="finishQuiz()">Brinde grátis</button>
          <button onclick="finishQuiz()">Cashback</button>
        </div>
      </div>
    </div>

    <div class="progress" style="margin-top: 30px;">
      <div class="progress-bar" id="progressBar" style="width: 0%"></div>
    </div>
  </div>

  <script>
    let current = 1;
    let coins = 0;

    function nextQuestion(qNum) {
      document.getElementById('q' + qNum).classList.remove('active');
      document.getElementById('q' + (qNum + 1)).classList.add('active');
      coins++;
      updateCoins();
      updateProgress(qNum + 1);
    }

    function finishQuiz() {
      document.getElementById('q3').classList.remove('active');
      coins++;
      updateCoins();
      updateProgress(3);
      alert("Quiz finalizado! Você ganhou +1 BuyatCoin 🎉");
    }

    function updateCoins() {
      document.getElementById('coins').textContent = coins;
    }

    function updateProgress(step) {
      const percent = Math.min((step / 3) * 100, 100);
      document.getElementById('progressBar').style.width = percent + '%';
    }
  </script>

</body>
</html>
