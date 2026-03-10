<?php
<<<<<<< HEAD
=======

require_once 'Controlador.php';

>>>>>>> f9f4640 (encapsulamento)
class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    // Método construtor para inicializar os atributos
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // Implementação dos métodos da interface Controlador

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function aumentarVolume()
    {
<<<<<<< HEAD
        if ($this->ligado) {
            $this->setVolume($this->getVolume() + 5);
=======
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 3);
>>>>>>> f9f4640 (encapsulamento)
        }
    }

    public function diminuirVolume()
    {
        if ($this->ligado) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function abrirMenu()
    {
<<<<<<< HEAD
        if ($this->ligado) {
            echo "----- MENU -----\n";
            echo "Está ligado? " . ($this->ligado ? "Sim" : "Não") . "\n";
            echo "Está tocando? " . ($this->tocando ? "Sim" : "Não") . "\n";
            echo "Volume: " . $this->getVolume() . "\n";
            for ($i = 0; $i < $this->volume; $i += 10) {
                echo "|";
            }
            echo "\n----------------\n";
        } else {
            echo "TV está desligada, não posso abrir o menu.\n";
        }
=======
        
        echo "-------- MENU --------\n";
        echo "Está ligado? " . ($this->getLigado() ? "Sim" : "Não") . "\n";
        echo "Está tocando? " . ($this->getTocando() ? "Sim" : "Não") . "\n";
        echo "Volume: " . $this->getVolume();
        for ($i = 0; $i < $this->volume; $i += 10) {
            echo "|";
        }
        echo "\n----------------\n";
        echo '<br>';
    
        //  echo "TV está desligada, não posso abrir o menu.\n";
        
>>>>>>> f9f4640 (encapsulamento)
    }

    public function fecharMenu()
    {
        if ($this->ligado) {
            echo "Fechando menu...\n";
        } else {
            echo "TV está desligada, não há menu para fechar.\n";
        }
    }

    public function play()
    {
<<<<<<< HEAD
        if ($this->ligado && !$this->tocando) {
            $this->tocando = true;
=======
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
>>>>>>> f9f4640 (encapsulamento)
        }
    }

    public function pause()
    {
<<<<<<< HEAD
        if ($this->ligado && $this->tocando) {
            $this->tocando = false;
=======
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
            
>>>>>>> f9f4640 (encapsulamento)
        }
    }

    public function ligarMudo()
    {
<<<<<<< HEAD
        if ($this->ligado && !$this->tocando) {
            $this->volume = 0;
=======
        if ($this->getLigado() && !$this->getVolume() > 0) {
            $this->setVolume(0);
>>>>>>> f9f4640 (encapsulamento)
        }
    }

    public function desligarMudo()
    {
<<<<<<< HEAD
        if ($this->ligado && !$this->tocando) {
            $this->volume = 50;
=======
        if ($this->getLigado() && !($this->getVolume() == 0)) {
            $this->setVolume(50);
>>>>>>> f9f4640 (encapsulamento)
        }
    }

// Métodos getters e setters para os atributos privados

    /**
     * Get the value of volume
     */
<<<<<<< HEAD
    public function getVolume()
=======
    private function getVolume()
>>>>>>> f9f4640 (encapsulamento)
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     */
<<<<<<< HEAD
    public function setVolume($volume): self
=======
    private function setVolume($volume): self
>>>>>>> f9f4640 (encapsulamento)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */
<<<<<<< HEAD
    public function getLigado()
=======
    private function getLigado()
>>>>>>> f9f4640 (encapsulamento)
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     */
<<<<<<< HEAD
    public function setLigado($ligado): self
=======
    private function setLigado($ligado): self
>>>>>>> f9f4640 (encapsulamento)
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */
<<<<<<< HEAD
    public function getTocando()
=======
    private function getTocando()
>>>>>>> f9f4640 (encapsulamento)
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     */
<<<<<<< HEAD
    public function setTocando($tocando): self
=======
    private function setTocando($tocando): self
>>>>>>> f9f4640 (encapsulamento)
    {
        $this->tocando = $tocando;

        return $this;
    }
}
