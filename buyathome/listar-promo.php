<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Promoções do Dia</title>
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

    .promo-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      animation: fadeIn 0.6s ease-in-out;
    }

    .promo-card {
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

    .promo-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .promo-card img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin-bottom: 12px;
      border-radius: 12px;
      animation: popIn 0.5s ease;
    }

    .promo-title {
      font-size: 16px;
      font-weight: 600;
      color: #ff6b00;
      margin-bottom: 8px;
    }

    .promo-info {
      font-size: 14px;
      color: #444;
      background: #ffe5cc;
      padding: 6px 10px;
      border-radius: 8px;
      margin-top: 4px;
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
      <h2> Promoções do Dia</h2>
      <p>Aproveite as ofertas exclusivas escolhidas para você</p>
    </div>
    <div class="back-btn">
      <button onclick="window.location.href='./home4.php'">← Voltar</button>
    </div>
    

    <div class="promo-list">
      <div class="promo-card">
        <img src="./src/img/OIP (7).jpg" alt="Maçã">
        <div class="promo-title">Nescau 370g</div>
        <div class="promo-info">20% de desconto</div>
        <div class="promo-info">R$ 2,39 / unidade</div>
      </div>

      <div class="promo-card">
        <img src="./src/img/3f560987733248acfed7f124e5912ffb.webp" alt="Sabão OMO">
        <div class="promo-title">Sabão OMO 1kg</div>
        <div class="promo-info">50% de desconto</div>
        <div class="promo-info">R$ 9,99</div>
      </div>

      <div class="promo-card">
        <img src="./src/img/OIP (5).jpeg" alt="Leite">
        <div class="promo-title">Leite Integral</div>
        <div class="promo-info">30% de desconto</div>
        <div class="promo-info">R$ 3,49</div>
      </div>

      <div class="promo-card">
        <img src="./src/img/OIP (6).jpeg" alt="Biscoito Nestlé">
        <div class="promo-title">Biscoito Nestlé</div>
        <div class="promo-info">25% de desconto</div>
        <div class="promo-info">R$ 4,75</div>
      </div>
    </div>
  </div>

</body>
</html>
