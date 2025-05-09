<?php
    class Gerar{
        private $nome;
        private $descricao;
        private $preco;
        private $evolucao;
        private $classe;
        private $link;

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of descricao
         */
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao($descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of preco
         */
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         */
        public function setPreco($preco): self
        {
                $this->preco = $preco;

                return $this;
        }

        /**
         * Get the value of link
         */
        public function getLink()
        {
                return $this->link;
        }

        /**
         * Set the value of link
         */
        public function setLink($link): self
        {
                $this->link = $link;

                return $this;
        }
    
        
            public function getCard(){
                echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
                echo $this->nome . "<br>";
                echo $this->descricao . "<br>";
                echo $this->preco . "<br>";
                echo $this->classe . "<br>";
                echo $this->evolucao . "<br>";
                echo "<img style='width: 100%; height: auto;' src='" . $this->link . "' /><br><br>";
                echo "</div>";
            }            

    

        /**
         * Get the value of evolucao
         */
        public function getEvolucao()
        {
                return $this->evolucao;
        }

        /**
         * Set the value of evolucao
         */
        public function setEvolucao($evolucao): self
        {
                $this->evolucao = $evolucao;

                return $this;
        }

        /**
         * Get the value of classe
         */
        public function getClasse()
        {
                return $this->classe;
        }

        /**
         * Set the value of classe
         */
        public function setClasse($classe): self
        {
                $this->classe = $classe;

                return $this;
        }
    }
?>