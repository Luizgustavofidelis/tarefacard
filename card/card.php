<?php
    require_once("modelo/Gerar.php");

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $classe = $_POST['classe'];
    $evolucao = $_POST['evolucao'];
    $link = $_POST['link'];
    
    $gerar = new Gerar();
    $gerar->setNome("nome: " .$nome);
    $gerar->setDescricao($descricao);
    $gerar->setPreco("preco: " .$preco ." R$");
    $gerar->setLink($link);
    $gerar->setClasse($classe);
    $gerar->setEvolucao($evolucao);
    
    
    $gerar->getCard();
    
    echo '<a href="formulario.php">voltar para pagina principal</a>';
?>