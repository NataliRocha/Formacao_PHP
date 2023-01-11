<?php

// serve para criarmos um nome para os elementos do array, podemos usar duas formas:

$dados =['Vinicius',10,24];
[$nome,$nota,$idade] =$dados;
var_dump($nome, $nota, $idade);


//funcao lista

list($nome, $nota, $idade)=$dados;
var_dump($nome, $nota, $idade);



