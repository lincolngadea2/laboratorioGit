<?php

/*
 * Exemplo de funcionamento da herança com a classe generalizada Conta e 
 * As classes mais específicas, contaCorrente, contaPoupanca e contaSalario
 */

/**
 * Description of conta
 *
 * @author Lincoln Gadea
 */
class Conta {
    
    protected $agencia;
    protected $numero;
    protected $saldo;
    
    public function depositar($valor){
          $this->saldo += $valor;
    }
    
    public function verSaldo(){
        echo "</br>Saldo da conta ".$this->numero.":R$".$this->saldo;
    }
    
     function sacar($valor);
    
   
        
    
}
    
    
