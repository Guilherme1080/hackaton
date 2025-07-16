<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Escolha Perfeita - Home</title>
  <style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #fffaf5;
    color: #333;
  }

  header {
    background-color: #ffd9b3;
    padding: 30px 20px;
    text-align: center;
    color: #333;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }

  header h1 {
    margin: 0;
    font-size: 26px;
  }

  .menu-opcoes {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    gap: 16px;
  }

  .menu-opcoes button {
    width: 90%;
    max-width: 300px;
    padding: 15px;
    font-size: 16px;
    background-color: #ffc285;
    color: #fff;
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: background 0.3s;
  }

  .menu-opcoes button:hover {
    background-color: #ffb066;
  }

  .menu-opcoes button:last-child {
    background-color: #ff9800;
  }

  .menu-opcoes button:last-child:hover {
    background-color: #e38900;
  }

  .secao {
    background: #ffffff;
    margin: 20px;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: none;
  }

  .secao h2 {
    color: #ff9800;
    margin-top: 0;
  }

  input[type="text"],
  input[type="number"] {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 16px;
  }

  .adicionar-btn {
    background-color: #ff9800;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 10px;
  }

  .adicionar-btn:hover {
    background-color: #e38900;
  }

  ul {
    list-style-type: none;
    padding: 0;
    margin-top: 10px;
  }

  li {
    background-color: #f1f1f1;
    margin: 5px 0;
    padding: 10px;
    border-radius: 8px;
  }

  #resultadoDesconto {
    color: #ff9800;
    font-weight: bold;
  }
</style>

</head>
<body>

  <header>
    <h1>Escolha Perfeita 🍏</h1>
  </header>

  <div class="menu-opcoes">
    <button onclick="mostrarSecao('lista')">📝 Criar Lista</button>
    <button onclick="mostrarSecao('promocoes')">💰 Ver Promoções</button>
    <button onclick="mostrarSecao('combo')">🛒 Meu Combo</button>
    <button onclick="mostrarSecao('buyath')">💸 Trocar BuyathCoin</button>
    <button onclick="finalizarCompra()">✅ Finalizar</button>
  </div>

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
    <p>Produto disponível: <strong>Sabonete Dove 90g</strong><br>
      Preço original: <strong>R$ 7,00</strong></p>

    <label for="qtdMoedas">Quantas BuyathCoins deseja usar?</label><br>
    <input type="number" id="qtdMoedas" min="1" max="100" placeholder="Ex: 10" />
    <button class="adicionar-btn" onclick="calcularDesconto()">Trocar</button>

    <p id="resultadoDesconto"></p>
  </div>

  <script>
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
      const respostas = JSON.parse(localStorage.getItem('respostasEscolhaPerfeita')) || [];
      const listaCombo = document.getElementById("comboSugerido");
      listaCombo.innerHTML = "";

      if (respostas.includes("Sim")) listaCombo.innerHTML += "<li>🥗 Mix de folhas orgânicas</li>";
      if (respostas.includes("Mais econômicas")) listaCombo.innerHTML += "<li>🍝 Macarrão marca econômica</li>";
      if (respostas.includes("Marcas conhecidas")) listaCombo.innerHTML += "<li>🧀 Queijo Polenghi</li>";
      if (respostas.includes("Sim, claro!")) listaCombo.innerHTML += "<li>🔔 Ofertas exclusivas ativadas</li>";
      if (respostas.length === 0) listaCombo.innerHTML = "<li>Nenhuma sugestão disponível.</li>";
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

      if (isNaN(usar) || usar <= 0) {
        resultado.textContent = "Digite uma quantidade válida.";
        return;
      }

      if (usar > moedas) {
        resultado.textContent = `Você só possui ${moedas} BuyathCoins.`;
        return;
      }

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
