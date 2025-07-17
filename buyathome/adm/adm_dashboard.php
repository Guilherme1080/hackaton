<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Painel Administrativo - Mercado Autônomo</title>
  <link rel="stylesheet" href="./adm-style.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f8f8f8;
      display: flex;
    }

    .container {
      display: flex;
      width: 100%;
      min-height: 100vh;
    }

    .sidebar {
      width: 220px;
      background-color: #fdba7e;
      padding: 20px;
      color: white;
      border-radius: 40px;
      margin-right: 50px;
      position: relative;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 24px;
      color: #fff;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin-bottom: 15px;
    }

    .sidebar ul li a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      display: block;
      padding: 10px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    .sidebar ul li a:hover {
      background-color: #f79c4c;
    }

    .logout {
      position: absolute;
      bottom: 30px;
      left: 20px;
      width: 180px;
    }

    .logout a {
      display: block;
      background-color: white;
      color: #fdba7e;
      text-align: center;
      padding: 10px;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s;
    }

    .logout a:hover {
      background-color: #fff3e1;
    }

    .content {
      flex: 1;
      padding: 30px;
      overflow-y: auto;
    }

    .content h3 {
      margin-bottom: 15px;
      border-left: 4px solid #f39c12;
      padding-left: 10px;
      font-size: 20px;
    }

    .news-gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }

    .news-card {
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .news-card:hover {
      transform: translateY(-5px);
    }

    .news-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .news-card p {
      padding: 10px;
      font-size: 15px;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>BuyAtHome</h2>
      <ul>
        <li><a href="./listar-produtos.php">📦 Produtos</a></li>
        <li><a href="./listar-promo.php">🔥 Promoções</a></li>
        <li><a href="./listar-combo.php">🎁 Combos</a></li>
        <li><a href="./listar-moeda.php">💰 Moeda Diária</a></li>
      </ul>
      <div class="logout">
        <a href="logout.php">🚪 Sair</a>
      </div>
    </aside>

    <div class="content">
      <h3>📰 Novidades da Loja</h3>
      <div class="news-gallery">
        <div class="news-card">
          <img src="../src/img/488905391_1040137811505790_7570048791726485930_n.jpg" alt="Produto 1">
          <p>Nova linha de snacks disponíveis!</p>
        </div>
        <div class="news-card">
          <img src="../src/img/488688605_1037444618441776_6663313718380150593_n.jpg" alt="Promo 2">
          <p>Oferta imperdível em bebidas!</p>
        </div>
        <div class="news-card">
          <img src="../src/img/494621203_1058235353029369_3041224476247037310_n.jpg" alt="Combo 3">
          <p>Compre mais por menos com nossos combos.</p>
        </div>

        <h3>🆕 Outras Novidades</h3>
        <div class="news-gallery">
            <div class="news-card">
                <img src="https://via.placeholder.com/300x180?text=Nova+Entrega" alt="Nova Entrega">
                <p>Agora entregamos até as 22h em bairros selecionados!</p>
            </div>
            <div class="news-card">
                <img src="https://via.placeholder.com/300x180?text=App+Atualizado" alt="App Atualizado">
                <p>Aplicativo atualizado com novas funcionalidades.</p>
            </div>
            <div class="news-card">
                <img src="https://via.placeholder.com/300x180?text=Loja+Nova" alt="Loja Nova">
                <p>Nova loja física em breve no centro da cidade!</p>
            </div>
        </div>
      </div>
    </div>
</body>
</html>
