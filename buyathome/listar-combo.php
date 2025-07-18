<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Combos Disponíveis</title>
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

    .combo-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .combo-card {
      background-color: #fff3e0;
      border-radius: 16px;
      padding: 16px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .combo-card:hover {
      transform: translateY(-5px);
    }

    .combo-name {
      font-size: 16px;
      font-weight: 700;
      color: #ff6b00;
      margin-bottom: 8px;
    }

    .combo-desc {
      font-size: 13px;
      color: #555;
      flex-grow: 1;
      margin-bottom: 12px;
    }

    .combo-price {
      font-size: 15px;
      font-weight: 600;
      color: #2e2e2e;
      background: #ffd8b3;
      padding: 6px;
      border-radius: 8px;
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
      <h2> Combos Especiais</h2>
      <p>Veja os combos que preparamos para você!</p>
    </div>

    <div class="back-btn">
      <button onclick="window.location.href='./home4.php'">← Voltar</button>
    </div>

    <div class="combo-list">
      <div class="combo-card">
        <div class="combo-name">Combo Fitness</div>
        <div class="combo-desc">Mix de folhas + água de coco + barra de cereal</div>
        <div class="combo-price">R$ 17,98</div>
      </div>

      <div class="combo-card">
        <div class="combo-name">Combo Lanche</div>
        <div class="combo-desc">Pão de Forma + Presunto 140g + Mussarela 140g + refrigerante 2L COCA-COLA</div>
        <div class="combo-price">R$ 45,50</div>
      </div>

      <div class="combo-card">
        <div class="combo-name">Combo Café da Manhã</div>
        <div class="combo-desc">Café 140g + Pão de Forma + Presunto 140g + Mussarela 140g + Manteiga Delicia 140g</div>
        <div class="combo-price">R$ 68,50</div>
      </div>

      <div class="combo-card">
        <div class="combo-name">Combo Bebidas</div>
        <div class="combo-desc">Suco de fruta + água mineral + refrigerante</div>
        <div class="combo-price">R$ 9,75</div>
      </div>

      <div class="combo-card">
        <div class="combo-name">Combo Doces</div>
        <div class="combo-desc">Chocolate + bala sortida + bombom + paçoca</div>
        <div class="combo-price">R$ 7,90</div>
      </div>
    </div>
  </div>

</body>
</html>
