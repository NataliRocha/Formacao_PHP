<?php

$conta1 = ['nome' => 'Vinicius', 'saldo' => 1000];
$conta2 = ['nome' => 'Maria', 'saldo' => 3000];
$conta3 = ['nome' => 'João', 'saldo' => 300];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i =0; $i <count($contasCorrentes); $i++){
 echo "Nome: ", $contasCorrentes[$i]['nome']  ;
echo " Saldo: ", $contasCorrentes[$i] ['saldo']; 
echo "" . PHP_EOL;
} 