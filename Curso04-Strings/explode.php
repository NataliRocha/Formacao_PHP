<?php


//comando explode recebe três parametros (o separador, o array, e o limit)
//neste exemplo dividimos o array em duas parte o (1) e o (2,3,4)
$array ='1,2,3,4';

var_dump(explode(',',$array,2));
//-------------------------------------

//funço TRIM serve para remover espaços de uma variável

$csv = ",.vinicius@alura.com.br.,";

//echo trim($csv,'.,') . PHP_EOL ;
echo ltrim($csv,'.,') . PHP_EOL ;
echo rtrim($csv,'.,') . PHP_EOL ;

