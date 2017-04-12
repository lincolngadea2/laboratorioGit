<?php
include './Conta.php';
/*
 * subclass of father class conta.
 */

/**
 * Description of contaCorrente
 *
 * @author Lincoln Gadea
 */
class contaCorrente extends Conta{
    
    public function sacar($valor){
        if($this->saldo >= $valor){
            $this->saldo -=$valor;
            $this->saldo -= 1;
        }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
