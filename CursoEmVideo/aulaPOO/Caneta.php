<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;
    protected $carga;


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
