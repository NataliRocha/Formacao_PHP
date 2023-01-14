<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;



$endereco = new Endereco ('Petrópolis', 'uma bairro', 'minha rua', '71B');
$vinicius =new Titular(new CPF('123.456.789-10'), 'Vinicius', $endereco);
var_dump($vinicius);
$primeiraConta =new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

 $patricia = new Titular(new CPF('1111111'), 'Patricia',$endereco);
$segundaConta = new Conta ($patricia);
 var_dump($segundaConta);


//$outra = new Titular(new CPF('123'),'Abcdefg');
//unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
