<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Trocar BuyatCoins</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    .container {
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

    .product-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .product-card {
      background-color: #fff3e0;
      border-radius: 16px;
      padding: 16px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-card img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .product-title {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 6px;
      color: #444;
    }

    .product-desc {
      font-size: 13px;
      color: #777;
    }

    .back-btn {
      margin-top: 20px;
      display: flex;
      justify-content: flex-start;
    }

    .back-btn button {
      background-color: #ff6b00;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 12px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: background-color 0.3s ease;
    }

    .back-btn button:hover {
      background-color: #e65c00;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h2>🪙 Troque seus BuyatCoins</h2>
      <p>Veja o que você pode levar com suas moedas acumuladas!</p>
    </div>

    <div class="back-btn">
      <button onclick="window.location.href='./home4.php'">← Voltar</button>
    </div>

    <div class="product-list">
      <div class="product-card">
        <img src="./src/img/706446.webp" alt="Sabonete">
        <div class="product-title">Sabonete Dove</div>
        <div class="product-desc">10 moedas</div>
      </div>

      <div class="product-card">
        <img src="./src/img/OIP (1).jpeg" alt="Refrigerante">
        <div class="product-title">Refrigerante 2L</div>
        <div class="product-desc">20 moedas</div>
      </div>

      <div class="product-card">
        <img src="./src/img/fardo-com-6-sucos-de-laranja-integral-2l-refrigerado-natural-one-0031595.png" alt="Suco">
        <div class="product-title">Suco Natural</div>
        <div class="product-desc">15 moedas</div>
      </div>

      <div class="product-card">
        <img src="./src/img/OIP (2).jpeg" alt="Escova de Dente">
        <div class="product-title">Pasta de Dente</div>
        <div class="product-desc">8 moedas</div>
      </div>

      <div class="product-card">
        <img src="./src/img/OIP (3).jpeg" alt="Chocolate">
        <div class="product-title">Chocolate 90g</div>
        <div class="product-desc">12 moedas</div>
      </div>

      <div class="product-card">
        <img src="./src/img/OIP (4).jpeg" alt="Pão de Forma">
        <div class="product-title">Pão de Forma</div>
        <div class="product-desc">11 moedas</div>
      </div>
    </div>
  </div>

</body>
</html>
