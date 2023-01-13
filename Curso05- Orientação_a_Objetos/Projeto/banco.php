<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';



$vinicius =new Titular(new CPF('123.456.789-10'), 'Vinicius');
var_dump($vinicius);
$primeiraConta =new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

// $patricia = new Titular(new CPF('1111111'), 'Patricia');
// $segundaConta = new Conta ($patricia);
// var_dump($segundaConta);


//$outra = new Titular(new CPF('123'),'Abcdefg');
//unset($segundaConta);

//echo Conta::recuperaNumeroDeContas();
