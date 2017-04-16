<?php

if (htmlspecialchars($_GET["tipo"]==1)){
    include './cachorro.php';
    $servivo = new Cachorro;
}else if (htmlspecialchars($_GET["tipo"]==2)){
    include './pessoa.php';
    $servivo = new Pessoa;
}

if($servivo instanceof cachorro){
    $servivo->latir();
}
if($servivo instanceof Pessoa){
    $servivo->falar();
}