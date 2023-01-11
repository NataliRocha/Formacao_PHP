<?php

$contasCorrentes = [11111 => ['nome' => 'Vinicius', 'saldo' => 1000],
22222 =>  ['nome' => 'Maria', 'saldo' => 3000],
33333 => ['nome' => 'João', 'saldo' => 300]

];





foreach ($contasCorrentes as $cpf => $conta){
    echo $conta ['nome'] . PHP_EOL;

}


