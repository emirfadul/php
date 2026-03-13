<?php

class Loja {
    public $nome;
    public $preco;

    public function __construct($nome = "", $preco = 0.0) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

}


class Carrinho {
    public $quantidade = [];

   public function adicionarProduto(Loja $produto) {
        $this->quantidade[] = $produto;
    }

    public function listarProdutos() {
        foreach ($this->quantidade as $produto) {
            echo "Produto: " . $produto->nome . " - Preço: R$ " . number_format($produto->preco, 2) . "<br>";
        }    
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->quantidade as $produto) {
            $total += $produto->preco;
        }
        return $total;
    }
}

$produto1 = new Loja('Smartphone', 1500.00);
$produto2 = new Loja('Notebook', 5000.00);
$produto3 = new Loja('Tablet', 3000.00);

$carrinho = new Carrinho();

$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);
$carrinho->adicionarProduto($produto3);

echo "<h2>Produtos no Carrinho:</h2>";
$carrinho->listarProdutos();

echo "<h2>Total: R$ " . number_format($carrinho->calcularTotal(), 2) . "</h2>";
$carrinho->calcularTotal();


