<?php

$valor = $_POST["txtValor"];
$saque = $_POST["txtSaque"];
$conta = null;

if($_POST["cbTipo"]==1){
    include ("contaCorrente.php");
    $conta = new contaCorrente;
}
if($_POST["cbTipo"]==2){
    include ("contaPoupanca");
    $conta = new contaPoupanca;
}
if($_POST["cbTipo"]==3){
    include ("contaSalario.php");
    $conta = new contaSalario;
}

$conta->depositar(100);
$conta->sacar(30);
$conta->verSaldo();