<?php
include 'Conta.php';
/*
 * subclass of father class conta.
 */

/**
 * Description of contaCorrente
 *
 * @author Lincoln Gadea
 */
final class contaCorrente extends Conta{
    
    public function sacar($saque){
        if($this->saldo >= $saque){
            $this->saldo -=$saque;
            $this->saldo -= 1;
        }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
