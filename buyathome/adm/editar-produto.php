<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Editar Produtos</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f8f8;
      margin: 0; 
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }
    h2 {
      color: #fdba7e;
      margin-bottom: 20px;
      font-family: "Montserrat", sans-serif;
      text-align: center;
    }
    /* Botão voltar no topo */
    #btn-voltar {
      background-color: #fdba7e;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      font-family: "Montserrat", sans-serif;
      color: #333;
      transition: background-color 0.3s;
    }
    #btn-voltar:hover {
      background-color: #f79c4c;
    }

    table {
      width: 700px;
      max-width: 90vw;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
    }
    th {
      background-color: #fdba7e;
      color: #333;
      font-weight: 600;
    }
    td input[type="text"], td input[type="number"] {
      width: 100%;
      padding: 6px 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      box-sizing: border-box;
    }
    img.thumb {
      width: 60px;
      border-radius: 4px;
      display: block;
      max-height: 60px;
      object-fit: contain;
    }
    button.save-btn {
      background-color: #fdba7e;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s;
    }
    button.save-btn:hover {
      background-color: #f79c4c;
    }
    /* Modal */
    #modal-success {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #b2e0a4;
      color: #000;
      padding: 15px 25px;
      border-radius: 8px;
      box-shadow: 0 0 12px rgba(0,0,0,0.2);
      font-weight: 600;
      font-family: "Montserrat", sans-serif;
      display: none;
      z-index: 9999;
    }
  </style>
</head>
<body>

  <button id="btn-voltar" onclick="history.back()">← Voltar</button>

  <h2>Editar Produtos</h2>

  <table id="produtos-table">
    <thead>
      <tr>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Preço (R$)</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr data-id="1">
        <td><img src="../src/img/baixados.webp" alt="Produto 1" class="thumb"></td>
        <td><input type="text" value="KRO Snacks"></td>
        <td><input type="number" step="0.01" value="3.98"></td>
        <td><input type="text" value="Snacks KRÓ"></td>
        <td><button class="save-btn">Salvar</button></td>
      </tr>
      <tr data-id="2">
        <td><img src="../src/img/coca.jpg" alt="Produto 2" class="thumb"></td>
        <td><input type="text" value="Coca Lata 350ml"></td>
        <td><input type="number" step="0.01" value="5.00"></td>
        <td><input type="text" value="Coca Lata 350ml."></td>
        <td><button class="save-btn">Salvar</button></td>
      </tr>
    </tbody>
  </table>

  <!-- Modal -->
  <div id="modal-success">Editado com sucesso!</div>

  <script>
    const modal = document.getElementById('modal-success');

    function showModal() {
      modal.style.display = 'block';
      setTimeout(() => {
        modal.style.display = 'none';
      }, 2000);
    }

    document.querySelectorAll('.save-btn').forEach(button => {
      button.addEventListener('click', () => {
        const tr = button.closest('tr');

        const inputsText = tr.querySelectorAll('input[type="text"]');
        const nome = inputsText[0].value.trim();
        const desc = inputsText[1].value.trim();
        const precoInput = tr.querySelector('input[type="number"]');
        const preco = parseFloat(precoInput.value).toFixed(2);

        precoInput.value = preco;

        if (!nome || !desc || isNaN(preco) || preco <= 0) {
          alert('Preencha todos os campos corretamente!');
          return;
        }

        showModal();
      });
    });
  </script>

</body>
</html>
