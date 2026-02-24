<?php

namespace Sistema\Nucleo;

class Controlador
{
    public function __construct(string $tema)
    {
        echo 'Controlador initialized';
        echo '<br>';
        echo $tema;
    }
}


