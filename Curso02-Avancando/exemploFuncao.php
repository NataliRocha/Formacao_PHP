<?php

include 'funcoes.php';





$contasCorrentes = [
11111 => ['nome' => 'Vinicius', 'saldo' => 1000],
22222 =>  ['nome' => 'Maria', 'saldo' => 3000],
33333 => ['nome' => 'João', 'saldo' => 300]

];

$contasCorrentes['33333'] = sacar($contasCorrentes ['33333'], 100);
$contasCorrentes['11111'] = depositar($contasCorrentes ['11111'], -10000);

if (600 > $contasCorrentes ['11111'] ['saldo']){
    exibeMensagem ("Você não pode sacar este valor");

} else{

$contasCorrentes['11111']['saldo']-=600;
}


foreach ($contasCorrentes as $cpf => $conta) {

  exibeMensagem ("$cpf $conta[nome]  $conta[saldo]");

}


