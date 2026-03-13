<?php

class Pessoa {
    private $nome;
    private $idade;

   //getters e setters
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos.";
    }  
    
}

    $pessoa = new Pessoa();
    $pessoa->setNome("João");
    $pessoa->setIdade(25);

    $pessoa->apresentar();
    

