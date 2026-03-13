<?php
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            $this->setAprovada(true);
        } else {
            $this->setLutas(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar()
    {
        if ($this->getLutas()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo "<p>" . $this->desafiante->getNome() . " venceu!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>A luta não pode acontecer!</p>";
        }
    }

    //Getters e Setters
    private function getDesafiado()
    {
        return $this->desafiado;
    }

    private function setDesafiado($desafiado): self
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    private function getDesafiante()
    {
        return $this->desafiante;
    }

    private function setDesafiante($desafiante): self
    {
        $this->desafiante = $desafiante;

        return $this;
    }
    private function getRounds()
    {
        return $this->rounds;
    }

    private function setRounds($rounds): self
    {
        $this->rounds = $rounds;

        return $this;
    }

    private function getLutas()
    {
        return $this->aprovada;
    }

    private function setLutas($lutas): self
    {
        $this->aprovada = $lutas;

        return $this;  
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada): self
    {
        $this->aprovada = $aprovada;

        return $this;
    }



     
}

