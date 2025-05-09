<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Card</title>
</head>

<body>


    <h2>Card do Bloonstd6</h2>
    <form method="POST" action="card.php">
        <input name="nome" placeholder="Informe o nome" />
        <br><br>
        <input name="descricao" placeholder="Informe a descricao do card" />
        <br><br>
        <input name="preco" placeholder="Informe o preco do produto(caso houver)" />
        <br><br>
        <select name="classe">
            <option value="">--Selecione a Classe---</option>
            <option value="P">primario</option>
            <option value="M">militar</option>
            <option value="A">magico</option>
            <option value="S">suporte</option>
        </select>
        <br><br>
        <input name="evolucao" placeholder="infome o nomme da evolucao">
        <br><br>
        <select name="tipo">
            <option value="">--Selecione o tipo---</option>
            <option value="macaco">macaco</option>
            <option value="estrutura">estrutura</option>
        </select>
        <br><br>
        <input type="text" name="link" placeholder="informe o link da imagem">
        <br><br>
        <button type="submit">Enviar</button>


    </form>
</body>


</html>