<?php

$hostname = "localhost";
$database = "loja_skinni";
$user = "marcos";
$password = "rl3xmn030";

$conexao = mysqli_connect($hostname, $user, $password, $database);

/*
if($conexao->connect_errno){
    echo "ERRO!";
}else{
    echo "FUNCIONOU!!!";
}
*/