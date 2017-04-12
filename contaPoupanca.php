<?php
include './Conta.php';

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
class contaPoupanca extends Conta{
    
       public function sacar($valor){
        if($this->saldo >= $valor){
            $this->saldo -=$valor;
       }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
