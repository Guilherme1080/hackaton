<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produtos da Loja</title>
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
      width: 100%;
      max-width: 800px;
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
    }

    .header h2 {
      font-size: 26px;
      color: #ff6b00;
      font-weight: 700;
    }

    .product-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      animation: fadeIn 0.6s ease-in-out;
    }

    .product-card {
      background-color: #ffffff;
      border-radius: 20px;
      padding: 16px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
      width: 80px;
      height: 80px;
      object-fit: contain;
      margin-bottom: 12px;
      animation: popIn 0.5s ease;
    }

    .product-title {
      font-size: 16px;
      font-weight: 600;
      color: #ff6b00;
      margin-bottom: 8px;
    }

    .product-desc {
      font-size: 14px;
      color: #555;
      line-height: 1.4;
    }
    back-btn {
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

    @keyframes popIn {
      0% { transform: scale(0.9); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h2>Produtos do Mini Mercado</h2>
      <p>Veja os itens disponíveis no mercado autônomo</p>
    </div>
    <div class="back-btn">
      <button onclick="window.location.href='./home4.php'">← Voltar</button>
    </div>

    <div class="product-list">
  <div class="product-card">
    <img src="./src/img/OIP (12).jpeg" alt="Arroz">
    <div class="product-title">Arroz Tipo 1</div>
    <div class="product-desc">5kg - R$ 21,90</div>
  </div>

  <div class="product-card">
    <img src="./src/img/OIP (13).jpeg" alt="Óleo">
    <div class="product-title">Óleo de Soja</div>
    <div class="product-desc">1L - R$ 6,49</div>
  </div>

  <div class="product-card">
    <img src="./src/img/557250.png" alt="Refrigerante">
    <div class="product-title">Refrigerante Cola</div>
    <div class="product-desc">2L - R$ 7,99</div>
  </div>

  <div class="product-card">
    <img src="./src/img/OIP (5).jpeg" alt="Leite">
    <div class="product-title">Leite Integral</div>
    <div class="product-desc">1L - R$ 4,79</div>
  </div>

  <div class="product-card">
    <img src="./src/img/OIP (10).jpeg" alt="Detergente">
    <div class="product-title">Detergente Neutro</div>
    <div class="product-desc">500ml - R$ 2,29</div>
  </div>

  <div class="product-card">
    <img src="./src/img/OIP (11).jpeg" alt="Sabonete">
    <div class="product-title">Sabonete Cremoso</div>
    <div class="product-desc">1 unid - R$ 1,99</div>
  </div>
</div>
  </div>

</body>
</html>
