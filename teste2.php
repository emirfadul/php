<?php

echo $_COOKIE['nome'];
echo $_COOKIE['idade'];

if(isset($_COOKIE['nome']))
{
    echo "O Cookie 'nome' existe.";
}else{
    echo "O Cookie 'user' Náo existe.";
}

