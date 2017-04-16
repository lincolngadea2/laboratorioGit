<?php

$valor = htmlspecialchars($_POST["txtValor"]);
$saque = htmlspecialchars($_POST["txtSaque"]);
$conta = null;

if(htmlspecialchars($_POST["cbTipo"])==1){
    include ("./contaCorrente.php");
    $conta = new contaCorrente;
}
if(htmlspecialchars($_POST["cbTipo"])==2){
    include ("./contaPoupanca.php");
    $conta = new contaPoupanca;
}
if(htmlspecialchars($_POST["cbTipo"])==3){
    include ("./contaSalario.php");
    $conta = new contaSalario;
}
if(htmlspecialchars($_POST["txtCheque"])!= ""){
    $conta->emitirCheque(htmlspecialchars($_POST["txtCheque"]));
}

$conta->depositar(100);
$conta->sacar(30);
$conta->verSaldo();