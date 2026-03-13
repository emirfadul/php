<?php

class Funcionario
{
    private $nome;
    private $salario;


    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        if ($this->salario <= 0) {
            echo "Salário inválido. O salário deve ser maior que zero.";
        } else {
            $this->salario = $salario;
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        if (empty($this->nome)) {
            echo "Nome inválido. O nome não pode ser vazio.";
        } else {
            $this->nome = $nome;
        }
    }
}

$funcionario = new Funcionario();
$funcionario->setNome("João");
$funcionario->setSalario(3000);

echo "Nome: " . $funcionario->getNome() . "\n";
echo "Salário: R$ " . $funcionario->getSalario() . "\n";    




