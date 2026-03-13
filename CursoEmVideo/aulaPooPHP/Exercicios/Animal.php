<?php

class Animal {
    private $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {
        if ( $this->nome == "Cachorro") {
            echo "O cachorro late: Au Au!";
        } elseif ($this->nome == "Gato") {
            echo "O gato mia: Miau!";
        } else {
            echo "O animal emite um som genérico.";        
        }
    
    }
}

class Cachorro extends Animal {
    public function emitirSom() {
        echo "O Cachorro faz: Au Au!";
    }
}

class Gato extends Animal {
    public function emitirSom() {   
        echo "O gato faz Miau!";
    }
}

$cachorro = new Cachorro();
$cachorro->setNome("Cachorro");

$gato = new Gato();
$gato->setNome("Gato");

$cachorro->emitirSom(); // Saída: Au Au!
echo "<br>";
$gato->emitirSom(); // Saída: Miau! 
