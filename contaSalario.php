<?php
include './Conta.php';
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
class contaSalario extends Conta{
    
       public function sacar($valor){
        if($this->saldo >= $valor){
            $this->saldo -=$valor;
            $this->saldo -= 0.5;
        }else{
            echo "Saldo insuficiente";
        }
    }
    //put your code here
}
