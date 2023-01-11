<?php

function exibeMensagem (string $mensagem){
    echo $mensagem . '<br>';
}


function sacar(array $conta, float $valorSacar): array
{


    if ($valorSacar > $conta ['saldo']){
        exibeMensagem ("Você não pode sacar este valor");
    
    } else{
    
   $conta['saldo']-=$valorSacar;
    }
    
return $conta;

}




function depositar(array $conta, float $depositarValor): array
{

    if ($depositarValor>0){
    $conta['saldo']+=$depositarValor;}
else {
    exibeMensagem("Deposito inválido!");
}

    return $conta;

}

function titularComLetrasMaiusculas(array $conta)
{
    echo $conta['nome'];
    $conta['nome'] = mb_strtoupper($conta['nome']);
}