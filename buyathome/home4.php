<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Escolha Perfeita - Quiz</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
    body {
      background-color: #fff8f1;
      color: #333;
      padding: 20px;
      display: flex;
      justify-content: center;
    }

    .dashboard {
      background: #ffffff;
      border-radius: 24px;
      box-shadow: 0 4px 20px rgba(255, 186, 123, 0.3);
      max-width: 700px;
      width: 100%;
      padding: 30px;
      animation: fadeIn 0.8s ease-in-out;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h2 {
      font-size: 26px;
      color: #ff6b00;
      font-weight: 700;
    }

    .header p {
      margin-top: 6px;
      color: #555;
    }

    .stats {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 16px;
      margin: 25px 0;
    }

    .stat-box {
      background: #fff3e0;
      padding: 16px;
      border-radius: 16px;
      flex: 1 1 30%;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .stat-box h4 {
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #777;
      margin-bottom: 5px;
    }

    .stat-box p {
      font-size: 20px;
      font-weight: 700;
      color: #ff8a3d;
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
      font-weight: 600;
    }

    .options {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .options button {
      padding: 12px;
      border: none;
      background-color: #ffa057;
      border-radius: 12px;
      color: #fff;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .options button:hover {
      background-color: #ff8433;
      transform: scale(1.02);
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
      width: 0%;
      background-color: #2fff00ff;
      transition: width 0.4s ease;
    }

    .final-options {
  display: none;
  margin-top: 30px;
  animation: fadeIn 0.6s ease;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

.final-options button {
  height: 120px;
  border: none;
  border-radius: 20px;
  background-color: #ffe0c4;
  color: #2e2e2e;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  transition: 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 15px;
}

.final-options button:hover {
  background-color: #ffd1a3;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}




    .modal {
      position: fixed;
      top: 0; left: 0;
      width: 100vw; height: 100vh;
      background: rgba(0,0,0,0.5);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    .modal-content {
      background: white;
      padding: 30px;
      border-radius: 20px;
      text-align: center;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      animation: scaleUp 0.3s ease;
    }

    .modal-content h3 {
      margin-bottom: 15px;
      font-size: 22px;
      color: #ff6b00;
    }

    .modal-content p {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }

    .modal-content ul {
      text-align: left;
      padding-left: 0;
      margin-top: 10px;
    }

    .modal-content li {
      list-style: none;
      background: #f9f9f9;
      padding: 8px 12px;
      margin-bottom: 6px;
      border-radius: 8px;
      color: #333;
      font-size: 15px;
    }

    .modal-content button {
      padding: 10px 20px;
      border: none;
      background-color: #ff6b00;
      color: white;
      border-radius: 10px;
      cursor: pointer;
      font-weight: 600;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes scaleUp {
      from { transform: scale(0.95); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

<div class="dashboard">
  <div class="header">
    <h2> Olá, João!</h2>
    <p>Responda o quiz para ganhar BuyatCoins 🪙</p>
  </div>

  <div class="stats">
    <div class="stat-box"><h4>BuyatCoins</h4><p id="coins">0</p></div>
    <div class="stat-box"><h4>Total Gasto (Mês)</h4><p>R$ 367,80</p></div>
    <div class="stat-box"><h4>Meta p/ Brinde</h4><p>R$ 500</p></div>
  </div>

  <div class="quiz">
    <div class="question active" id="q1">
      <h3>1. Qual é o Seu Snacks Favorito?</h3>
      <div class="options">
        <button onclick="nextQuestion(1)">KRÓ</button>
        <button onclick="nextQuestion(1)">Doritos</button>
        <button onclick="nextQuestion(1)">Outros...</button>
      </div>
    </div>

    <div class="question" id="q2">
      <h3>2. Qual é o Seu Refrigerante Favorito?</h3>
      <div class="options">
        <button onclick="nextQuestion(2)">COCA-COLA</button>
        <button onclick="nextQuestion(2)">Guaraná</button>
        <button onclick="nextQuestion(2)">Outros...</button>
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

  <div class="progress"><div class="progress-bar" id="progressBar"></div></div>

  <div class="final-options" id="finalOptions">
    <button onclick="window.location.href='./listar-promo.php'"> Promoções</button>
    <button onclick="window.location.href='./listar-produto.php'"> Lista do Mini Mercado</button>
    <button onclick="window.location.href='./troca-md.php'"> Trocar os BuyatCoins</button>
    <button onclick="window.location.href='./listar-combo.php'"> Combos Promocionais</button>
  </div>
</div>

<!-- Modal Genérico -->
<div class="modal" id="modalContainer">
  <div class="modal-content" id="modalContent">
    <h3 id="modalTitle"></h3>
    <ul id="modalList"></ul>
    <button onclick="closeModal()">Fechar</button>
  </div>
</div>

<script>
  let current = 1, coins = 0;

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
    localStorage.setItem('buyathcoins', coins.toString());

    // Exibe o modal de parabéns
    showModalFinalizacao();
  }

  function updateCoins() {
    document.getElementById('coins').textContent = coins;
  }

  function updateProgress(step) {
    const percent = Math.min((step / 3) * 100, 100);
    document.getElementById('progressBar').style.width = percent + '%';
  }

  function showModalFinalizacao() {
    const modal = document.getElementById('modalContainer');
    const title = document.getElementById('modalTitle');
    const list = document.getElementById('modalList');

    title.textContent = "Parabéns!";
    list.innerHTML = `
      <li>🎉 Parabens, Você Fez a Escolha Certa</li>
      <li>🪙 Ganhou ${coins} BuyatCoins</li>
      <li>Agora você pode acessar funcionalidades exclusivas abaixo </li>
    `;
    modal.style.display = 'flex';
  }

  function closeModal() {
  document.getElementById('modalContainer').style.display = 'none';
  document.getElementById('finalOptions').style.display = 'grid'; // mostra os cards só agora!
}

  function showModal(type) {
    const modal = document.getElementById('modalContainer');
    const title = document.getElementById('modalTitle');
    const list = document.getElementById('modalList');
    list.innerHTML = "";

    const data = {
      promo: {
        title: "Promoções do Dia",
        items: [
          "🍎 Maçã Orgânica - 20% OFF",
          "🧼 Sabão OMO 1kg - Leve 2, pague 1",
          "🥛 Leite Integral - R$3,49",
          "🍪 Biscoito Nestlé - 50% na 2ª unidade"
        ]
      },
      lista: {
        title: "Lista do Mercado",
        items: [
          " Pão Integral",
          " Frango Resfriado",
          " Queijo Mussarela",
          "🍫 Chocolate 70%",
          "🥬 Alface Crespa"
        ]
      },
      moeda: {
        title: "Trocar por BuyatCoins",
        items: [
          "🧴 Sabonete Dove - 10 moedas",
          "🥤 Refrigerante 2L - 20 moedas",
          "🧃 Suco Natural - 15 moedas"
        ]
      },
      combo: {
        title: "Combos Exclusivos",
        items: [
          "🥗 Fitness: Mix folhas + água de coco + barra cereal",
          "🍔 Lanche: Pão + hambúrguer + queijo",
          "🧃 Bebidas: Suco + Água + Refrigerante"
        ]
      }
    };

    const section = data[type];
    title.textContent = section.title;
    section.items.forEach(i => {
      const li = document.createElement('li');
      li.textContent = i;
      list.appendChild(li);
    });

    modal.style.display = 'flex';
  }
</script>

</body>
</html>
