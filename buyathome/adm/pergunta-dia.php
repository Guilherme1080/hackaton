<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Pergunta do Dia</title>
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
      min-height: 100vh;
    }

    .container {
      display: flex;
      width: 100%;
    }

    .sidebar {
      width: 250px;
      background-color: #fdba7e;
      padding: 20px;
      color: white;
      border-radius: 40px;
      margin-right: 100px;
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

    .logout {
      position: fixed;
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
      background-color: #948e84ff;
    }

    .sidebar ul li a:hover {
      background-color: #f79c4cff;
    }

    .forms {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }

    .grid-container {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .form-wrapper {
      width: 100%;
      max-width: 600px;
    }

    .form-section {
      width: 100%;
      margin: 15px;
      padding: 30px;
      background-color: #fffdfb;
      border: 1px solid #f2d6b4;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(253, 186, 126, 0.2);
    }

    .form-section:hover {
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .form-section h3 {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 20px;
      border-left: 4px solid #fdba7e;
      padding-left: 10px;
      color: #333;
    }

    .input-box {
      margin-bottom: 20px;
    }

    .input-box label {
      display: block;
      font-size: 15px;
      color: #555;
      margin-bottom: 5px;
    }

    .input-box input {
      width: 100%;
      height: 45px;
      background-color: #fafafa;
      border: 1px solid rgb(190, 190, 190);
      font-size: 16px;
      padding: 10px 15px;
      border-radius: 5px;
    }

    .btn {
      width: 100%;
      height: 45px;
      background: #fdba7e;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn:hover {
      background: #b2e0a4;
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>BuyAtHome</h2>
      <ul>
        <li><a href="./adm_dashboard.php">🏠 Dashboard</a></li>
        <li><a href="#">📦 Produtos</a></li>
        <li><a href="./listar-promo.php">🔥 Promoções</a></li>
        <li><a href="./listar-combo.php">🎁 Combos</a></li>
        <li><a href="./listar-moeda.php">💰 Moeda Diária</a></li>
        <li><a href="./pergunta-dia.php">❓ Pergunta do Dia</a></li>
      </ul>
      <div class="logout">
        <a href="../home4.php">🚪 Sair</a>
      </div>
    </aside>

    <div class="forms">
      <div class="grid-container">
        <div class="form-wrapper">
          <form class="form-section" action="#" method="post">
            <h3>Pergunta do Dia</h3>

            <div class="input-box">
              <label for="pergunta">Nova Pergunta:</label>
              <input type="text" name="pergunta" id="pergunta" placeholder="Digite a pergunta do quiz..." required>
            </div>

            <div class="input-box">
              <label for="resposta1">Resposta 1:</label>
              <input type="text" name="resposta1" id="resposta1" placeholder="Digite a primeira resposta..." required>
            </div>

            <div class="input-box">
              <label for="resposta2">Resposta 2:</label>
              <input type="text" name="resposta2" id="resposta2" placeholder="Digite a segunda resposta..." required>
            </div>

            <div class="input-box">
              <label for="resposta3">Resposta 3:</label>
              <input type="text" name="resposta3" id="resposta3" placeholder="Digite a terceira resposta..." required>
            </div>

            <button type="submit" class="btn">Atualizar Pergunta</button>
          </form>
          <form class="form-section" action="pergunta_crud.php" method="post">
            <h3>Pergunta do Dia</h3>

            <div class="input-box">
              <label for="pergunta">Nova Pergunta:</label>
              <input type="text" name="pergunta" id="pergunta" placeholder="Digite a pergunta do quiz..." required>
            </div>

            <div class="input-box">
              <label for="resposta1">Resposta 1:</label>
              <input type="text" name="resposta1" id="resposta1" placeholder="Digite a primeira resposta..." required>
            </div>

            <div class="input-box">
              <label for="resposta2">Resposta 2:</label>
              <input type="text" name="resposta2" id="resposta2" placeholder="Digite a segunda resposta..." required>
            </div>

            <div class="input-box">
              <label for="resposta3">Resposta 3:</label>
              <input type="text" name="resposta3" id="resposta3" placeholder="Digite a terceira resposta..." required>
            </div>

            <button type="submit" class="btn">Atualizar Pergunta</button>
          </form>
          <form class="form-section" action="pergunta_crud.php" method="post">
            <h3>Pergunta do Dia</h3>

            <div class="input-box">
              <label for="pergunta">Nova Pergunta:</label>
              <input type="text" name="pergunta" id="pergunta" placeholder="Digite a pergunta do quiz..." required>
            </div>

            <div class="input-box">
              <label for="resposta1">Resposta 1:</label>
              <input type="text" name="resposta1" id="resposta1" placeholder="Digite a primeira resposta..." required>
            </div>

            <div class="input-box">
              <label for="resposta2">Resposta 2:</label>
              <input type="text" name="resposta2" id="resposta2" placeholder="Digite a segunda resposta..." required>
            </div>

            <div class="input-box">
              <label for="resposta3">Resposta 3:</label>
              <input type="text" name="resposta3" id="resposta3" placeholder="Digite a terceira resposta..." required>
            </div>

            <button type="submit" class="btn">Atualizar Pergunta</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
