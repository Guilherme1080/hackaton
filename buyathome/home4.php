<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Escolha Perfeita - Quiz e Funcionalidades</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
    body { background-color: #fff8f1; color: #333; padding: 20px; }

    .dashboard {
      max-width: 700px;
      margin: auto;
      background: #ffffff;
      border-radius: 24px;
      box-shadow: 0 4px 15px rgba(255, 186, 123, 0.2);
      padding: 30px;
    }

    .header h2 { font-size: 24px; color: #ff8a3d; }
    .header p { margin-top: 5px; }

    .stats {
      display: flex; justify-content: space-between; flex-wrap: wrap;
      gap: 20px; margin: 20px 0;
    }

    .stat-box {
      background: #fff3e0;
      padding: 15px 20px;
      border-radius: 16px;
      flex: 1 1 30%;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .stat-box h4 { font-size: 14px; margin-bottom: 5px; color: #555; }
    .stat-box p { font-size: 18px; font-weight: 600; color: #ff8a3d; }

    .question { display: none; animation: fadeIn 0.4s ease-in-out; }
    .question.active { display: block; }
    .question h3 { font-size: 20px; margin-bottom: 15px; }

    .options { display: flex; flex-direction: column; gap: 12px; }
    .options button {
      padding: 12px; border: none;
      background-color: #ffb97b; border-radius: 10px;
      color: #2e2e2e; font-weight: 600; cursor: pointer;
      transition: 0.3s ease;
    }
    .options button:hover {
      background-color: #ffc999;
      transform: scale(1.02);
      box-shadow: 0 3px 8px rgba(255, 186, 123, 0.4);
    }

    .progress { margin-top: 30px; background: #f0f0f0; border-radius: 8px; overflow: hidden; height: 20px; }
    .progress-bar { height: 100%; width: 0%; background-color: #ffb97b; transition: width 0.3s ease; }

    .final-options, .logout { display: none; margin-top: 30px; }

    .final-options button {
      width: 100%; margin-bottom: 12px;
      padding: 14px; font-size: 16px;
      border: none; border-radius: 12px;
      background-color: #ffc285; color: #2e2e2e;
      font-weight: 600; cursor: pointer;
      transition: 0.3s ease;
    }
    .final-options button:hover {
      background-color: #ffb066; transform: scale(1.02);
    }

    .logout button {
      background: none; border: none;
      color: #888; font-size: 14px;
      cursor: pointer; text-decoration: underline;
    }

    .secao {
      background: #fffefb;
      margin-top: 20px;
      padding: 20px;
      border-radius: 16px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      display: none;
    }

    .secao h2 { color: #ff9800; margin-top: 0; }

    input[type="text"], input[type="number"] {
      width: 90%; padding: 10px;
      border: 1px solid #ccc; border-radius: 10px;
      margin: 10px 0; font-size: 16px;
    }

    .adicionar-btn {
      background-color: #ff9800;
      color: white; border: none;
      padding: 10px 20px; font-size: 16px;
      border-radius: 10px; cursor: pointer;
    }

    .adicionar-btn:hover { background-color: #e38900; }

    ul { list-style-type: none; padding: 0; margin-top: 10px; }
    li { background-color: #f1f1f1; margin: 5px 0; padding: 10px; border-radius: 8px; }

    #resultadoDesconto { color: #ff9800; font-weight: bold; }

    .cards-sugestoes {
      display: none;
      margin-top: 30px;
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }

    .card {
      background: #fff3e6;
      border-radius: 16px;
      padding: 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      width: calc(50% - 10px);
      text-align: center;
    }

    .card img {
      width: 80px;
      height: 80px;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .card h4 { margin: 10px 0 5px; color: #ff8a3d; }
    .card p { font-size: 14px; color: #555; }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 500px) {
      .stats { flex-direction: column; }
      .card { width: 100%; }
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
    <div class="stat-box"><h4>BuyatCoins</h4><p id="coins">0</p></div>
    <div class="stat-box"><h4>Total Gasto (Mês)</h4><p>R$ 367,80</p></div>
    <div class="stat-box"><h4>Meta p/ Brinde</h4><p>R$ 500</p></div>
  </div>

  <!-- Quiz -->
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

  <div class="progress"><div class="progress-bar" id="progressBar"></div></div>

  <div class="final-options" id="finalOptions">
    <button onclick="mostrarSecao('lista')">📝 Criar Lista</button>
    <button onclick="mostrarSecao('promocoes')">🔥 Ver Promoções</button>
    <button onclick="mostrarSecao('combo')">🎯 Meus Combos</button>
    <button onclick="mostrarSecao('buyath')">💰 Trocar BuyathCoin</button>
    <button onclick="finalizarCompra()">✅ Finalizar</button>
  </div>

  <div class="cards-sugestoes" id="cardsSugestoes">
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png" />
      <h4>Maçã Orgânica</h4>
      <p>Perfeita para o dia a dia</p>
    </div>
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/1086/1086933.png" />
      <h4>Suco Natural</h4>
      <p>100% fruta - sem açúcar</p>
    </div>
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/1046/1046857.png" />
      <h4>Snacks Saudáveis</h4>
      <p>Leve, crocante e saboroso</p>
    </div>
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/1683/1683673.png" />
      <h4>Água de Coco</h4>
      <p>Refrescante e nutritiva</p>
    </div>
  </div>

  <div class="logout" id="logoutBtn">
    <button onclick="alert('Sessão encerrada com sucesso!')">Encerrar sessão diária</button>
  </div>

  <!-- Seções -->
  <div id="secao-lista" class="secao">
    <h2>Sua Lista de Compras</h2>
    <input type="text" id="itemLista" placeholder="Digite um item..." />
    <button class="adicionar-btn" onclick="adicionarItem()">Adicionar</button>
    <ul id="listaCompras"></ul>
  </div>

  <div id="secao-promocoes" class="secao">
    <h2>Promoções do Dia</h2>
    <ul>
      <li>🍎 Maçã orgânica - 20% OFF</li>
      <li>🧼 Sabão OMO 1kg - Leve 2, pague 1</li>
      <li>🥛 Leite Integral - R$3,49</li>
      <li>🍪 Biscoito Nestlé - 50% na 2ª unidade</li>
    </ul>
  </div>

  <div id="secao-combo" class="secao">
    <h2>Meu Combo Personalizado</h2>
    <ul id="comboSugerido"></ul>
  </div>

  <div id="secao-buyath" class="secao">
    <h2>Trocar BuyathCoin por Desconto</h2>
    <p>Você possui <strong id="moedasAtual">0</strong> BuyathCoins.</p>
    <p>Produto disponível: <strong>Sabonete Dove 90g</strong><br>Preço original: <strong>R$ 7,00</strong></p>
    <label>Quantas BuyathCoins deseja usar?</label>
    <input type="number" id="qtdMoedas" min="1" placeholder="Ex: 10" />
    <button class="adicionar-btn" onclick="calcularDesconto()">Trocar</button>
    <p id="resultadoDesconto"></p>
  </div>
</div>

<script>
  let current = 1, coins = 0;

  function nextQuestion(qNum) {
    document.getElementById('q' + qNum).classList.remove('active');
    document.getElementById('q' + (qNum + 1)).classList.add('active');
    coins++; updateCoins(); updateProgress(qNum + 1);
  }

  function finishQuiz() {
    document.getElementById('q3').classList.remove('active');
    coins++; updateCoins(); updateProgress(3);
    document.getElementById('finalOptions').style.display = 'block';
    document.getElementById('logoutBtn').style.display = 'block';
    document.getElementById('cardsSugestoes').style.display = 'flex';
    localStorage.setItem('buyathcoins', coins.toString());
    atualizarMoedas();
  }

  function updateCoins() {
    document.getElementById('coins').textContent = coins;
  }

  function updateProgress(step) {
    const percent = Math.min((step / 3) * 100, 100);
    document.getElementById('progressBar').style.width = percent + '%';
  }

  function mostrarSecao(secao) {
    document.querySelectorAll('.secao').forEach(s => s.style.display = "none");
    if (secao === 'combo') gerarCombo();
    if (secao === 'buyath') atualizarMoedas();
    document.getElementById(`secao-${secao}`).style.display = "block";
  }

  function adicionarItem() {
    const input = document.getElementById("itemLista");
    const item = input.value.trim();
    if (item !== "") {
      const li = document.createElement("li");
      li.textContent = item;
      document.getElementById("listaCompras").appendChild(li);
      input.value = "";
    }
  }

  function gerarCombo() {
    const listaCombo = document.getElementById("comboSugerido");
    listaCombo.innerHTML = "<li>🥗 Mix de folhas orgânicas</li><li>🍝 Macarrão Premium</li><li>🧀 Queijo Cheddar</li>";
  }

  function atualizarMoedas() {
    const moedas = parseInt(localStorage.getItem('buyathcoins')) || 0;
    document.getElementById('moedasAtual').innerText = moedas;
  }

  function calcularDesconto() {
    const moedas = parseInt(localStorage.getItem('buyathcoins')) || 0;
    const usar = parseInt(document.getElementById('qtdMoedas').value);
    const resultado = document.getElementById('resultadoDesconto');
    const precoOriginal = 7.00;

    if (isNaN(usar) || usar <= 0) return resultado.textContent = "Digite uma quantidade válida.";
    if (usar > moedas) return resultado.textContent = `Você só possui ${moedas} BuyathCoins.`;

    const desconto = usar * 0.10;
    const precoFinal = Math.max(0, precoOriginal - desconto).toFixed(2);
    resultado.innerHTML = `🎉 Você ganhou R$ ${desconto.toFixed(2)} de desconto!<br> Novo preço: <strong>R$ ${precoFinal}</strong>`;
    const novoSaldo = moedas - usar;
    localStorage.setItem('buyathcoins', novoSaldo.toString());
    document.getElementById('moedasAtual').innerText = novoSaldo;
  }

  function finalizarCompra() {
    alert("Sessão finalizada com sucesso! Obrigado por usar o Escolha Perfeita. 🧡");
  }
</script>

</body>
</html>
