<?php
class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function mostrarProduto() {
        echo "Produto: " . $this->nome . "\n";
        echo '<hr>';
        echo "Preço: R$ " . number_format($this->preco, 2) . "\n";
        echo '<hr>';
        echo "Estoque: " . $this->estoque . " unidades\n";
        echo '<hr>';
        echo "Valor total em estoque: R$ " . number_format($this->calcularTotal(), 2) . "\n";
    }   

    public function calcularTotal() {
        return $this->preco * $this->estoque;
    }
    
}

$produto = new Produto();
$produto->setNome("Notebook");
$produto->setPreco(2500.00);
$produto->setEstoque(2);   

$produto->mostrarProduto();