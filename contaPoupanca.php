<?php
include 'Conta.php';

class contaPoupanca extends Conta{
    
       public function sacar($saque){
        if($this->saldo >= $saque){
            $this->saldo -=$saque;
       }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
