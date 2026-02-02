<?php 

define("NAME", "EMIR");
echo NAME;

function test() {
    echo " O nome da funçáo é " . __FUNCTION__;
    echo "O metodo é ". __METHOD__;
}

test();

const EMIR = "EMIR DOS SANTOS";
echo EMIR;

define("YEAR", "wqeqwe");
if (defined("YEAR")) {
    echo "O ano é " . YEAR;
} else {        
    echo "Constante não definida.";
}

$result = 50 >= 30;
$result2 = 30 != 40;
echo $result2;
echo $result;



?>