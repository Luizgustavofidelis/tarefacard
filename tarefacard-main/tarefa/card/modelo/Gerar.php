<?php
class Gerar{
    private $nome;
    private $descricao;
    private $preco;
    private $evolucao;
    private $classe;
    private $link;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): self
    {
        $this->preco = $preco;
        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link): self
    {
        $this->link = $link;
        return $this;
    }

    public function getEvolucao()
    {
        return $this->evolucao;
    }

    public function setEvolucao($evolucao): self
    {
        $this->evolucao = $evolucao;
        return $this;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe): self
    {
        $this->classe = $classe;
        return $this;
    }

    public function getCard(){
        echo "<style>
            .card-gerado {
                border: none;
                border-radius: 10px;
                max-width: 320px;
                padding: 20px;
                background-color: #ff6f00;
                color: #333;
                box-shadow: 0 4px 12px rgba(255, 23, 23, 0.12);
                margin-top: 20px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align: center;
            }
            .info-container {
                border: 2px solid #007BFF; /* borda azul nas informações */
                border-radius: 8px;
                padding: 15px;
                margin-bottom: 15px;
                background-color: #00cfff; /* fundo claro para destacar */
                color: #333;
            }
            .info-container h2.card-nome {
                margin-top: 0;
                color: #007BFF;
                font-size: 1.8em;
            }
            .info-container p {
                font-size: 1em;
                line-height: 1.4;
                margin: 8px 0;
            }
            .card-gerado img.card-imagem {
                width: 100%;
                height: auto;
                border-radius: 8px;
                margin-top: 10;
                border: 2px solid #007BFF;
            }
        </style>";

        echo "<div class='card-gerado'>";
        echo "<div class='info-container'>";
        echo "<h2 class='card-nome'>" . htmlspecialchars($this->nome) . "</h2>";
        echo "<p class='card-descricao'>" . htmlspecialchars($this->descricao) . "</p>";
        echo "<p class='card-preco'>" . htmlspecialchars($this->preco) . "</p>";
        echo "<p class='card-classe'>" . htmlspecialchars($this->classe) . "</p>";
        echo "<p class='card-evolucao'>" . htmlspecialchars($this->evolucao) . "</p>";
        echo "</div>"; // fecha info-container
        echo "<img class='card-imagem' src='" . htmlspecialchars($this->link) . "' alt='Imagem do Produto' />";
        echo "</div>";
    }
}
?>
