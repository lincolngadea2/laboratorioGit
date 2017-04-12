<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>SELEÇÃO DE CONTAS</h1>
        </br>
        <form method="POST" action="operacao.php">
            <select name="cbTipo">
                <option value="1">Conta Corrente</option>
                <option value="2">Conta Poupança</option>
                <option value="3">Conta Salario</option>
            </select>
            </br>
            Valor: <input type="text" name="txtValor"/>
			Saque: <input type="text" name="txtSaque"/>
            </br>
            <input type="submit" value="OK"/>                
        </form>
    </body>
</html>