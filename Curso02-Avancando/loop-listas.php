<?php

$idadeList = [21,23,19,25,30,41,18];

for ($i=0; $i < 7; $i++)
{
    echo $idadeList[$i] . PHP_EOL;
} 

echo \PHP_EOL;

$nomes = ["Maria", "João", "Lucas", "Miguel"];

for ($i=0; $i<4;$i++)
{
    echo $nomes[$i] . PHP_EOL;
}

echo count($nomes);
