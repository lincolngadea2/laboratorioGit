<?php
include ("Conta.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contaSalario
 *
 * @author Lincoln Gadea
 */
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
