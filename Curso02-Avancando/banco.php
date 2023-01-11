<?php

require 'funcoes.php';


function exibeMensagem ($mensagem){
    echo $mensagem . '<br>';
}








$contasCorrentes = [
11111 => ['nome' => 'Vinicius', 'saldo' => 1000],
22222 =>  ['nome' => 'Maria', 'saldo' => 3000],
33333 => ['nome' => 'João', 'saldo' => 300]

];




if (600 > $contasCorrentes ['11111'] ['saldo']){
    exibeMensagem ("Você não pode sacar este valor");

} else{

$contasCorrentes['11111']['saldo']-=600;
}


titularComLetrasMaiusculas($contasCorrentes ['11111']);



foreach ($contasCorrentes as $cpf => $conta) {
 exibeMensagem ($cpf . " " . $conta['nome'] . ' ' . $conta['saldo']);

 }


