<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Painel Administrativo - Mercado Autônomo</title>
    <link rel="stylesheet" href="./adm-style.css" />
</head>
<body class="body-login">
    <div class="forms">
        <div class="grid-container">
            <!-- Produto -->
            <div class="form-wrapper">
                <form class="form-section" action="produto_crud.php" method="post" enctype="multipart/form-data">
                    <h3 class="tit">Cadastrar Produto</h3>

                    <div class="input-box">
                        <label for="nome_produto">Nome</label>
                        <input type="text" name="nome_produto" id="nome_produto" required>
                    </div>

                    <div class="input-box">
                        <label for="preco_produto">Preço</label>
                        <input type="number" step="0.01" name="preco_produto" id="preco_produto" required>
                    </div>

                    <div class="input-box">
                        <label for="descricao_produto">Descrição</label>
                        <input type="text" name="descricao_produto" id="descricao_produto" required>
                    </div>

                    <div class="input-box">
                        <label for="imagem_produto">Imagem</label>
                        <input type="file" name="imagem_produto" id="imagem_produto" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn">Cadastrar Produto</button>
                </form>
            </div>

            <!-- Promoção -->
            <div class="form-wrapper">
                <form class="form-section" action="promocao_crud.php" method="post" enctype="multipart/form-data">
                    <h3 class="tit">Cadastrar Promoção</h3>

                    <div class="input-box">
                        <label for="titulo_promocao">Título</label>
                        <input type="text" name="titulo_promocao" id="titulo_promocao" required>
                    </div>

                    <div class="input-box">
                        <label for="desc_promocao">Descrição</label>
                        <input type="text" name="desc_promocao" id="desc_promocao" required>
                    </div>

                    <div class="input-box">
                        <label for="desconto">Desconto (%)</label>
                        <input type="number" name="desconto" id="desconto" required>
                    </div>

                    <div class="input-box">
                        <label for="imagem_promocao">Imagem</label>
                        <input type="file" name="imagem_promocao" id="imagem_promocao" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn">Cadastrar Promoção</button>
                </form>
            </div>

            <!-- Combo -->
            <div class="form-wrapper">
                <form class="form-section" action="combo_crud.php" method="post" enctype="multipart/form-data">
                    <h3 class="tit">Criar Combo Promocional</h3>

                    <div class="input-box">
                        <label for="nome_combo">Nome do Combo</label>
                        <input type="text" name="nome_combo" id="nome_combo" required>
                    </div>

                    <div class="input-box">
                        <label for="produtos_combo">Produtos (IDs separados por vírgula)</label>
                        <input type="text" name="produtos_combo" id="produtos_combo" required>
                    </div>

                    <div class="input-box">
                        <label for="preco_combo">Preço Total</label>
                        <input type="number" step="0.01" name="preco_combo" id="preco_combo" required>
                    </div>

                    <div class="input-box">
                        <label for="imagem_combo">Imagem</label>
                        <input type="file" name="imagem_combo" id="imagem_combo" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn">Criar Combo</button>
                </form>
            </div>

            <!-- Moeda -->
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
</body>

</html>
