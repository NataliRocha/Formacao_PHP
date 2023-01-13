<?php


$notas=[
    10,
    8,
    9,
    7,
    6
];
//crescente 
sort($notas);
var_dump($notas);

//decrescente
rsort($notas);
var_dump($notas);


$notas =[
'Ana'=>10,
'João'=>8,
'Maria'=>9,
'Roberto'=>7,
'Vinicius'=>6
];

///asort e //arsort para manter as chaves 
ksort ($notas);
var_dump($notas);


// ksort e krsort para ordernar atraves das chaves

echo  gettype($notas);

var_dump(array_is_list($notas));