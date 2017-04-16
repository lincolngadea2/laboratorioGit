<?php
include ("Conta.php");

final class contaSalario extends Conta{
    
       public function sacar($saque){
        if($this->saldo >= $saque){
            $this->saldo -=$saque;
            $this->saldo -= 0.5;
        }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
