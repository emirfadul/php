<?php

use PDO;
use PDOException;

class Conexao
{

    private static $instancia;

    public static function getInstancia():PDO
    {

        if (empty(self::$instancia)) {
            try {
                self::$instancia = new PDO('mysql:host=localhost;port=8888;dbname=emir_db',
                    'root', '');
                echo 'Conexão estabelecida com sucesso!';

            }catch (PDOException $e) {
                die('Erro de Mensagem' .  $e->getMessage());
            }

            return self::$instancia;
        }
    }

}