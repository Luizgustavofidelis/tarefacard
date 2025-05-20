<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Card</title>
    <style>
        body {
            background-color: #00cfff;
            font-family: Arial, sans-serif;
            color: #1e1e1e;
            padding: 20px;
        }

        h2, h3 {
            color: #ff6f00;
        }

        input, select, button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input, select {
            width: 250px;
        }

        button {
            background-color: #ffa600;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff8c00;
        }

        h4 {
            color: rgb(47, 94, 26);
        }

        .container {
            display: flex;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
        }

        .imagem-container {
            margin-top: 260px; 
             margin-left: -300px;    
        }

        .imagem-container img {
            width: 600px;    
            height: auto;    
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
      
        <div class="conteudo">
            <h2>Card do Bloonstd6</h2>
            <h3>Aqui você pode fazer seu card de Bloonstd6!!!</h3>
            <h4>Bloonstd6 é um jogo onde possui macacos e estruturas (armadilhas) que o objetivo deles é proteger a torre dos balões malignos.</h4>
            <form method="POST" action="card.php">
                <input name="nome" placeholder="Informe o nome" /> 
                <br><br>
                <input name="descricao" placeholder="Informe a descrição do card" />
                <br><br>
                <input name="preco" placeholder="Informe o preço do produto" />
                <br><br>
                <select name="classe">
                    <option value="">--Selecione a Classe---</option>
                    <option value="Primario">Primário</option>
                    <option value="Militar">Militar</option>
                    <option value="magico">Mágico</option>
                    <option value="suporte">Suporte</option>
                </select>
                <br><br>
                <input name="evolucao" placeholder="Informe o nome da evolução">
                <br><br>
                <select name="tipo">
                    <option value="">--Selecione o tipo---</option>
                    <option value="macaco">Macaco</option>
                    <option value="estrutura">Estrutura</option>
                </select>
                <br><br>
                <input type="text" name="link" placeholder="Informe o link da imagem">
                <br><br>
                <button type="submit">Enviar</button>
            </form>
        </div>

      
        <div class="imagem-container">
            <img src="bloonst6formulariolegal.png" alt="Bloons TD6">
        </div>
    </div>
</body>

</html>
