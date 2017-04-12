<?php

$valor = $_POST["txtValor"];
$count = null;

if($_POST["cbTipo"]==1){
    include './contaCorrente.php';
    $count = new contaCorrente;
}
if($_POST["cbTipo"]==2){
    include './contaPoupanca.php';
    $count = new contaPoupanca;
}
if($_POST["cbTipo"]==1){
    include './contaSalario.php';
    $count = new contaSalario;
}

$conta->depositar(100);
$conta->verSaldo();