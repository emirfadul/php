<?php

class Carro {
    private $marca;
    private $modelo;
    private $ano;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function mostrarCarro() {
        echo "Marca: " . $this->marca . "\n";
        echo '<br>';
        echo "Modelo: " . $this->modelo . "\n";
        echo '<br>';
        echo "Ano: " . $this->ano . "\n";
    }

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
   
    public function detalhes() {
        return "Carro: " . $this->marca . " " . $this->modelo . " (" . $this->ano . ")";
    }

}

$carro = new Carro("Toyota", "Corolla", 2020);
$carro->mostrarCarro();