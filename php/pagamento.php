<?php
session_start();
include("conexao.php");

$pagamento = $_GET['pagamento'];
$nCartao = $_GET['numeroCartao'];
$codCartao = $_GET['codCartao'];

if(isset($_GET['pagamento'])){
    $nCartaoFormat = str_replace(" ", "", $nCartao);
    echo $nCartaoFormat;

    mysqli_query($conexao, "INSERT INTO pagamento VALUES (0, '$pagamento', '$nCartaoFormat', '$codCartao', 20.95, '1')");

}