<?php

class ContaBancaria
{
    public $numConta;
    protected $tipo; // "CC" para Conta Corrente, "CP" para Conta Poupança
    private $dono;
    private $saldo;
    public $status;


    //======== Métodos Públicos ========
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "Conta ainda tem dinheiro, não posso fechá-la.\n";
        } elseif ($this->getSaldo() < 0) {
            echo "Conta está em débito, não posso fechá-la.\n";
        } else {
            $this->setStatus(false);
            echo "Conta fechada com sucesso.\n";
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "Depósito de R$ $v realizado na conta de {$this->getDono()}.\n";
        } else {
            echo "Impossível depositar, a conta está fechada.\n";
        }
    }

    public function sacar($v)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque de R$ $v realizado na conta de {$this->getDono()}.\n";
            } else {
                echo "Saldo insuficiente para saque.\n";
            }
        } else {
            echo "Impossível sacar, a conta está fechada.\n";
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        } else {
            echo "Tipo de conta inválido.\n";
            return;
        }

        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "Mensalidade de R$ $v debitada da conta de {$this->getDono()}.\n";
            } else {
                echo "Saldo insuficiente para pagar a mensalidade.\n";
            }
        } else {
            echo "Impossível pagar, a conta está fechada.\n";
        }
    }

    // ========== Metodos Especiais ==========
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo 'Conta criada com sucesso!';
        echo '<br>';
    }

    // =========== Getters e Setters =================

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($n)
    {
        $this->numConta = $n;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;

        return $this;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($d)
    {
        $this->dono = $d;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($st)
    {
        $this->status = $st;

        return $this;
    }
}
