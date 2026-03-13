<?php

class ContaBancaria {
    private $titular;
    private $saldo;


    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }   

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }
    
    public function mostrarConta() {
        echo "Titular: " . $this->titular . "\n";
        echo '</br>';
        echo "Saldo: R$ " . number_format($this->saldo, 2) . "\n";
    }  


    // getters e setters

    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }    

}

$conta = new ContaBancaria();
$conta->setTitular("João Silva");
$conta->setSaldo(1000.00);
$conta->depositar(500.00);

$conta->mostrarConta();


