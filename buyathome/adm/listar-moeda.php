<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
  <link rel="stylesheet" href="listar-produtos.css">
</head>
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

.sidebar ul li a:hover {
    background-color: #f79c4cff;
}

.content {
    flex: 1;
    padding: 30px;
    overflow-y: auto;
}

.content section {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.content h3 {
    margin-bottom: 15px;
    border-left: 4px solid #f39c12;
    padding-left: 10px;
    font-size: 20px;
}

/* Tabela */
.tabela-container {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 12px 15px;
  border: 1px solid #ddd;
  text-align: left;
}

th {
  background-color: #f39c12;
  color: white;
}

tr:hover {
  background-color: #f9f9f9;
}

img.thumb {
  width: 60px;
  height: auto;
  border-radius: 4px;
}

.btn-editar {
  background-color: #3498db;
  color: white;
  padding: 6px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  font-size: 14px;
}

.btn-editar:hover {
  background-color: #2980b9;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

.body-login {
    margin: 0;
    padding: 40px 15px;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Alinha o topo, mas centraliza horizontal */
    background-color: #ffffff;
    min-height: 100vh;
}
.loucura{
    color: #fdba7e;
}
.forms {
    max-width: 1200px; /* aumentei para melhor acomodar os 2x2 */
    display: flex;
    flex-direction: column;
    align-items: center;
}


.tit {
    font-size: 28px;
    text-align: left;
    margin-bottom: 10px;
    font-weight: 600;
    color: #fdba7e;
}

.descrit {
    color: rgb(141, 141, 141);
    text-align: left;
    margin-bottom: 20px;
    font-size: 15px;
}

.input-box {
    position: relative;
    width: 100%;
    margin-bottom: 20px;
}

.input-box label {
    position: absolute;
    left: 10px;
    top: -8px;
    font-size: 14px;
    color: rgb(141, 141, 141);
    background-color: white;
    padding: 0 5px;
    z-index: 1;
}

.input-box input {
    width: 95%;
    height: 50px;
    background-color: #fafafa;
    border: 1px solid rgb(190, 190, 190);
    outline: none;
    font-size: 15px;
    color: #333;
    padding: 10px 15px;
    border-radius: 5px;
    transition: 0.3s ease;
}

.input-box input:focus {
    border-color: #fdba7e;
    background-color: #fff;
    box-shadow: 0 0 5px rgba(253, 186, 126, 0.5);
}

.btn {
    width: 100%;
    height: 45px;
    background: #fdba7e;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 15px;
    color: #333;
    font-weight: 600;
    margin-top: 10px;
    transition: 0.3s;
}

.btn:hover {
    background: #b2e0a4;
    color: #000;
}

.bt {
    width: 100%;
    height: 40px;
    background-color: #f2f2f2;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 15px;
    color: #333;
    font-weight: 600;
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.bt:hover {
    background-color: #e0e0e0;
}

.bt img {
    margin-right: 10px;
}

.back-links {
    color: #000;
    text-decoration: none;
    font-size: 14px;
}

.back-links:hover {
    color: rgb(92, 155, 29);
}

.remember-forgot {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 14px;
    margin-top: 10px;
}

.remember-forgot a {
    color: rgb(240, 8, 8);
    text-decoration: none;
}

.remember-forgot a:hover {
    color: rgb(255, 0, 0);
}

.account {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    margin-top: 15px;
}

.account .account-title {
    font-size: 15px;
    font-weight: 400;
}

.account .account-link {
    color: rgb(1, 50, 99);
    text-decoration: none;
    font-size: 15px;
    margin-left: 5px;
}

.linha {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}

.linha-1, .linha-2 {
    flex: 1;
    height: 1px;
    background-color: rgb(141, 141, 141);
}

.p1 {
    margin: 0 10px;
    color: rgb(141, 141, 141);
}

.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
}

.image-container img {
    max-width: 50%;
    height: auto;
}

.botao-login {
    all: unset;
    z-index: 100;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Seção administrativa (formulários separados) */
.form-section {
    width: 100%;
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
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    border-left: 4px solid #fdba7e;
    padding-left: 10px;
    color: #333;
    font-family: "Montserrat", sans-serif;
}
.grid-container {
    display: flex;
    justify-content: center; /* centraliza na horizontal */
    width: 100%;
}

.form-wrapper {
    width: 100%;
    max-width: 400px; /* largura ideal para o formulário */
}


/* Responsividade */
@media (max-width: 1366px) {
    .image-container {
        display: none;
    }
    .forms {
        margin-left: 0;
    }
}

@media (max-width: 768px) {
    .forms {
        margin: 0 20px;
    }
    .form-section h3,
    .descrit,
    .remember-forgot,
    .account {
        font-size: 4vw;
    }
}

@media (max-width: 425px) {
    .forms {
        margin: 0 15px;
    }
}

@media (max-width: 320px) {
    .forms {
        font-size: 3vw;
        margin: 0 10px;
    }
}
.product-list-section {
  margin-top: 40px;
  width: 100%;
}

.product-list-section h3 {
  font-size: 22px;
  margin-bottom: 15px;
  border-left: 4px solid #fdba7e;
  padding-left: 10px;
  color: #333;
  font-family: "Montserrat", sans-serif;
}
/* Corrige espaçamento do topo do formulário */
.forms {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px; /* espaço do topo */
}


/* Padroniza tabela com o estilo do sistema */
.tabela-container {
  background-color: #fff8f1;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  margin-top: 20px;
}

table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border-radius: 8px;
  overflow: hidden;
}

th {
  background-color: #fdba7e;
  color: #333;
  font-weight: 600;
  padding: 12px 15px;
  text-align: left;
  border-bottom: 2px solid #f0d0ac;
}

td {
  background-color: #fff;
  padding: 12px 15px;
  border-bottom: 1px solid #eee;
}

tr:last-child td {
  border-bottom: none;
}

/* Imagem miniatura */
.thumb {
  width: 60px;
  height: auto;
  border-radius: 4px;
}

/* Botão de editar */
.btn-editar {
  background-color: #fdba7e;
  color: #000;
  padding: 6px 14px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 500;
  text-decoration: none;
  transition: background-color 0.3s;
}

.btn-editar:hover {
  background-color: #f79c4c;
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


</style>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>BuyAtHome</h2>
      <ul>
        <li><a href="./adm_dashboard.php">🏠 Dashboard</a></li>
        <li><a href="./listar-produtos.php">📦 Produtos</a></li>
        <li><a href="./listar-promo.php">🔥 Promoções</a></li>
        <li><a href="./listar-combo.php">🎁 Combos</a></li>
        <li><a href="#">💰 Moeda Diária</a></li>
        <div class="logout">
            <a href="logout.php">🚪 Sair</a>
        </div>
      </ul>
    </aside>

    <div class="forms">
      <div class="grid-container">
        <!-- Produto -->
        <div class="form-wrapper">
                <form class="form-section" action="moeda_crud.php" method="post">
                    <h3 class="tit">Valor da Moeda Diária</h3>

                    <div class="input-box">
                        <label for="valor_moeda">Valor (R$)</label>
                        <input type="number" step="0.01" name="valor_moeda" id="valor_moeda" required>
                    </div>

                    <button type="submit" class="btn">Atualizar Valor</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
