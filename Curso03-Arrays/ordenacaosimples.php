<?php

$notas =[
[
    'aluno' => 'Maria',
    'nota'=>10,
],

[
    'aluno' => 'Vinicius',
    'nota' => 6,
],

[
    'aluno' => 'Maria',
    'nota' => '9,'
]

];


$notasOrdenadas =$notas;
sort($notasOrdenadas);

echo 'Desordenadas';
var_dump ($notas);

echo 'Ordenadas';
var_dump ($notasOrdenadas);


