<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;
    protected $carga;

    //=========== CONSTRUTOR =============
    // public function __construct($m, $c, $p)
    // {
    //     $this->modelo = $m;
    //     $this->cor = $c;
    //     $this->ponta = $p;
    //     $this->tampada = true;

    //     setModelo($m);
    //     setCor($c);
    //     setPonta($p);
    // }

    // ============= GETTERS E SETTERS =============
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
        return $this;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($c)
    {
        $this->cor = $c;
        return $this;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($p)
    {
        $this->ponta = $p;
        return $this;
    }

    public function getTampada()
    {
        return $this->tampada;
    }

    public function setTampada($t)
    {
        $this->tampada = $t;

        return $this;
    }

    public function getCarga()
    {
        return $this->carga;
    }

    public function setCarga($cr)
    {
        $this->carga = $cr;

        return $this;
    }

    // ============= FUNÇOES/METODOS =============


    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo 'ERRO! Não posso rabiscar';
        } else {
            echo 'Estou rabiscando..';
        }
    }

    public function tampar()
    {
        if ($this->tampada == true) {
            echo 'Caneta já está tampada.';
        } else {
            echo 'Caneta tampada.';
        }
    }

    public function destambar()
    {
        if ($this->tampada == true) {
            echo 'Caneta destampada';
        } else {
            echo 'Caneta destampada';
        }
    }
}
