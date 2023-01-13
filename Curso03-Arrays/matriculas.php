<?php

$alunos2021=[
0=>'Vinicius',
1=>'João',
2=>'Ana',
3=>'Roberto',
4=>'Maria',

];

$novosAlunos =[
5=>'Patricia',
6=>'Nico',
7=>'Kilderson',
8=>'Daiane',

];

//$alunos2022=array_merge($alunos2021, $novosAlunos);

$alunos2022=$alunos2021+$novosAlunos;
//var_dump($alunos2022);

//array_push($novosAlunos, 'Alice', 'Bob','Charlie');

$novosAlunos[]='Luiz';
var_dump($novosAlunos);

//array_unshift para adicionar elementos no começo do array


//array_shift para remover o primeiro elemento do array
//array_pop (remove o ultimo elemento do array)