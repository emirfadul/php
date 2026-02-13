<?php
//
//echo $_COOKIE['nome'];
//echo $_COOKIE['idade'];
//
//if(isset($_COOKIE['nome']))
//{
//    echo "O Cookie 'nome' existe.";
//}else{
//    echo "O Cookie 'user' Náo existe.";
//}


//session_start();
//session_id();
//echo session_id();

//unset($_SESSION['nome']);
unset($_SESSION['nome']);
// ou

//session_destroy();

if(isset($_SESSION['nome']))
{
    echo 'Sessão existe'. $_SESSION['nome'];
}else
{
    echo 'Sessão nao existe';
}



if(isset($_SESSION['person']))
{
    var_dump($_SESSION['person']);
}else
{
    echo 'Sessão náo existe.';
}
//echo $_SESSION['nome'];

