<?php
class Luta
{
    public $lutas;
    public $desafiado;
    public $desafiante;

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            $this->setLutas(true);
        } else {
            $this->setLutas(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
}