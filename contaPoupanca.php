<?php
include 'Conta.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contaPoupanca
 *
 * @author Lincoln Gadea
 */
final class contaPoupanca extends Conta{
    
       public function sacar($saque){
        if($this->saldo >= $saque){
            $this->saldo -=$saque;
       }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
