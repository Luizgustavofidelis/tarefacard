<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Card do Produto</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #00cfff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            max-width: 100vw;
            overflow-x: hidden; /* bloqueia scroll horizontal */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .main-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 900px; /* limita o container pra evitar scroll */
            gap: 20px;
            flex-wrap: nowrap;
        }

        .imagem-container,
        .imagem-container2 {
            width: 100px; /* tamanho fixo para imagens */
            flex-shrink: 0;
        }

        .imagem-container img,
        .imagem-container2 img {
            width: 200%;
            height: auto;
            display: block;
        }

        .card-container {
            background-color: #ff6f00;
            box-shadow: 0 4px 12px rgba(255, 23, 23, 0.12);
            border-radius: 10px;
            padding: 20px;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 400px;
            flex-grow: 1;
            min-width: 250px; /* para não ficar muito pequeno em telas pequenas */
        }

        .card-container h2 {
            margin-top: 0;
            color: #007BFF;
            font-size: 1.8em;
        }

        .card-container p {
            font-size: 1em;
            line-height: 1.4;
            margin: 10px 0;
        }

        a.button-voltar {
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        a.button-voltar:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        /* Responsividade simples para telas pequenas */
        @media (max-width: 600px) {
            .main-container {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            .imagem-container,
            .imagem-container2 {
                width: 150px;
            }
            .card-container {
                max-width: 90vw;
                min-width: unset;
            }
        }
    </style>
</head>
<body>

<div class="main-container">
    <div class="imagem-container">
        <img src="EtiennePortrait.png" alt="Imagem Esquerda">
    </div>

    <div class="card-container">
        <?php
            require_once("modelo/Gerar.php");

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $classe = $_POST['classe'];
            $evolucao = $_POST['evolucao'];
            $link = $_POST['link'];

            $gerar = new Gerar();
            $gerar->setNome("nome: " . $nome);
            $gerar->setDescricao($descricao);
            $gerar->setPreco("preco: " . $preco . " R$");
            $gerar->setLink($link);
            $gerar->setClasse("classe: " . $classe);
            $gerar->setEvolucao($evolucao);

            $gerar->getCard();
        ?>

        <a class="button-voltar" href="formulario.php">Voltar para página principal</a>
    </div>

    <div class="imagem-container2">
        <img src="01jgwn4ar3k71.png" alt="Imagem Direita">
    </div>
</div>

</body>
</html>
