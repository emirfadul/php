<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste estudos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Teste PHP</h1>


<?php

//echo gettype(1234); // integer
//echo "<br>";
//echo gettype(12.34); // double
//echo "<br>";
//echo gettype(false); // boolean
//echo "<br>";
//echo gettype("Olá Mundo!"); // string
//echo "<br>";
//echo gettype([]); // array
//echo "<br>";
//echo gettype(new stdClass()); // object
//echo "<br>";
//echo gettype(null); // NULL
//echo "<br>";
//
//const NAME = "João"; // Erro: Constantes não podem ter o símbolo de cifrão ($)
//echo NAME;
//
//function teste()
//{
//    echo "<br>";
//    echo __FUNCTION__;
//}
//
//teste(); // Chama a função teste e imprime o nome da função

//$teste1 = false;
//$teste2 = true;
//
//$teste3 = $teste1 || $teste2;
//
//var_dump($teste3);
//var_dump(! $teste1);

//$teste4 = "emir";

//if($teste4){
//    echo "variavel ok.";
//}else{
//    echo "variavel náo ok.";
//}

//$number1 = 70;
//$number2 = 40;
//$isAdmin = true;
//
//$resultado = $number2 > $number2 && $isAdmin;
//
//echo ($resultado) ? '<h1>verdadeiro</h1>' : '<h1> falso</h1>';

//$number5 = "joao22";
//
//switch ($number5) {
//    case "emir":
//        echo "<h1>entrou no case</h1>";
//        break;
//
//    case "joao":
//        echo "<h1>entrou no case 2</h1>";
//        break;
//
//    default:
//        echo "<h1>entrou no default</h1>";
//        break;
//}

// Contar o numero de caracteres de uma string

//$nome2 = "emir fadoul sobreira";
//
//echo strlen($nome2) . "\n";
//echo "<br>";
//
//echo substr($nome2, 0, 15) . "\n";
//
//$numeric1 = '33';
//$numeric2 = '2222EEE';
//
//if(is_numeric($numeric1) && is_numeric($numeric2)){
//    echo 'é numerico';
//}else {
//    echo 'náo é numerico';
//}

// Arredondamento floor e ceil

//$numero1 = 34.35;
//$numero2 = 34.65;
//
//echo floor($numero1) . "<br>";
//echo ceil($numero2);

//$data = ['emir', 'joao', 35, true];
//
//$lenght = count($data);
//
//array_push($data, 'emir');
//array_unshift($data, 'joao');
//
//$data[$lenght] = 'last';
//
//var_dump($data) ;

// **********
//(string);
//(boolean);
//(float);
//(integer);
//(double);
//(object);


//$person = ['name' => 'emir', 'age' => 35, 'documents' => ['cpf' => '123456789', 'rg' => '123456789', 'array' => ['sao paulo', 'flamengo']]];
//
//var_dump($person['document']['array']);

//******* Transformar a variavel

//$nome = ["emir"];
//
//$mudanca = (object) $nome;
//
//var_dump($mudanca);


//********** Looping FOR ********
//$names5 = ['Alexandre', 'joao', 'carlos'];
//
//for($i = 0; $i < count($names5); $i++){
//    echo $names5[$i] . "<br>";
//}
//
//******** LOOPING WHILE ************

//$names6 = ['Alexandre', 'joao', 'carlos'];
//$i = 0;
//
//while($i < count($names6)){
//    echo $names6[$i] . "<br>";
//    $i++;
//}
// ============ FUNCTIONS ========

//function connection(){
//    $pdo = new PDO('mysql:host=localhost;dbname=books', 'root', '');
//    return $pdo;
//}
//
//function getData($table){
//    $connection = connection();
//    $query = $connection->query("SELECT * FROM {$table}");
//    $query->execute();
//    return $query->fetchAll();
//}
//
//var_dump(getData('users')) ;
//

class Person
{
    public function __invoke()
    {
        return 'teste';
    }


}

$person

};

var_dump($person);


?>

</body>
</html>
