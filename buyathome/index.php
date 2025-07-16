<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Escolha Perfeita</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4fdf5;
      color: #333;
      padding: 20px;
      text-align: center;
    }

    header {
      background-color:#ffd9b3;
      padding: 20px 10px;
      color: black;
      border-radius: 12px;
      margin-bottom: 20px;
    }

    header h1 {
      font-size: 20px;
      margin-bottom: 5px;
    }

    header p {
      font-size: 14px;
      margin: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
    }

    .saldo-moedas {
      font-size: 16px;
      margin-bottom: 10px;
      color: #28a745;
      font-weight: bold;
      transition: transform 0.3s ease;
    }

    .box-pergunta {
      background: white;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      font-size: 16px;
      margin-bottom: 20px;
    }

    .respostas {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 15px;
    }

    .resposta {
      background-color:#ffd9b3;
      border: 2px solid #ffd9b3;
      border-radius: 10px;
      padding: 10px;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }

    .resposta:hover {
      background-color: #d3f0da;
    }

    .resposta.selecionado {
      background-color: #ffd9b3;
      color: white;
      transform: scale(1.05);
      border-color: #ffd9b3;
    }

    .botoes,
    .botoes-finais {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    button {
      background-color:#ffd9b3;
      color: white;
      padding: 8px 16px;
      font-size: 14px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #7dc78f;
    }

    .botoes-finais {
      margin-top: 20px;
      display: none;
    }

    @media (max-width: 480px) {
      .container {
        padding: 0 10px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <header>
      <h1>Luiza, bem-vinda ao Escolha Perfeita</h1>
      <p>Seu assistente no mercado autônomo</p>
    </header>

    <div class="saldo-moedas" id="saldoMoedas">
      💰 BuyathCoins: <span id="moedasValor">0</span>
    </div>

    <main>
      <div class="box-pergunta" id="perguntaBox">
        <p>Clique em <strong>Começar</strong> para resgatar suas BuyathCoin diária.</p>
      </div>

      <div class="respostas" id="respostasBox"></div>

      <div class="botoes">
        <button onclick="mostrarProximaPergunta()">Começar</button>
      </div>

      <div class="botoes-finais" id="botoesFinais">
        <button onclick="alert('Coleta diária finalizada!')">Finalizar</button>
        <button onclick="window.location.href='home.php'">Home</button>
      </div>
    </main>
  </div>

  <script>
    const perguntas = [
      {
        texto: "Você está procurando produtos saudáveis?",
        opcoes: ["Sim", "Não", "Talvez"]
      },
      {
        texto: "Prefere marcas conhecidas ou mais econômicas?",
        opcoes: ["Marcas conhecidas", "Mais econômicas", "Tanto faz"]
      },
      {
        texto: "Deseja sugestões de ofertas do dia?",
        opcoes: ["Sim, claro!", "Não, obrigado", "Mostrar depois"]
      }
    ];

    let index = 0;
    let respostasUsuario = [];
    let saldo = parseInt(localStorage.getItem('buyathcoins')) || 0;

    const perguntaBox = document.getElementById("perguntaBox");
    const respostasBox = document.getElementById("respostasBox");
    const botoesFinais = document.getElementById("botoesFinais");
    const saldoSpan = document.getElementById("moedasValor");

    function mostrarProximaPergunta() {
      if (index < perguntas.length) {
        const perguntaAtual = perguntas[index];
        perguntaBox.innerHTML = `<p>${perguntaAtual.texto}</p>`;
        respostasBox.innerHTML = perguntaAtual.opcoes.map(opcao =>
          `<button class="resposta" onclick="selecionarResposta(this, '${opcao}')">${opcao}</button>`
        ).join('');
        document.querySelector(".botoes button").style.display = "none";
      } else {
        localStorage.setItem('respostasEscolhaPerfeita', JSON.stringify(respostasUsuario));
        perguntaBox.innerHTML = "<p>Obrigado! Suas preferências foram registradas.</p>";
        respostasBox.innerHTML = "";
        botoesFinais.style.display = "flex";
      }
    }

    function selecionarResposta(botao, resposta) {
      const botoes = document.querySelectorAll('.resposta');
      botoes.forEach(btn => btn.classList.remove('selecionado'));
      botao.classList.add('selecionado');
      respostasUsuario.push(resposta);

      // Ganha +1 BuyathCoin por resposta
      saldo++;
      localStorage.setItem('buyathcoins', saldo);
      atualizarSaldoVisual();

      setTimeout(() => {
        index++;
        mostrarProximaPergunta();
      }, 500);
    }

    function atualizarSaldoVisual() {
      saldoSpan.innerText = saldo;
      const display = document.getElementById("saldoMoedas");
      display.style.transform = "scale(1.2)";
      setTimeout(() => {
        display.style.transform = "scale(1)";
      }, 300);
    }

    // Inicializa saldo ao carregar
    saldoSpan.innerText = saldo;
  </script>

</body>
</html>

