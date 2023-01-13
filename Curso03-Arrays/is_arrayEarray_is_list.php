<?php


$array =[

0=>'um',
1=>'dois',
2=>'tres',

]; 

//verifica se a chave existe
var_dump(array_is_list($array));

$array2 =[

    'João'=>'um',
    'Maria'=>'dois',
    'Carlos'=>'tres',
    
    ];
    
 
//verifica se o array é uma variavel   
var_dump(array_is_list($array2));

//verifica se existe a chave João
var_dump(array_key_exists('João',$array2));

//verifica se existe se uma variavel esta definida e se não é nulo
var_dump(isset($array2['João']));
//verifica se o valor existe
var_dump(in_array('cinco',$array));

//verifica o array que possue este valor;
echo array_search('tres', $array);