<?php

$altura=1.53;
$peso=90;

$imc = $peso/($altura*$altura);

echo "IMC = $imc" . PHP_EOL;

if ($imc<= 18.5){
    echo "Você está abaixo do peso";
} elseif ($imc =18.5 && $imc<=24.5)
{
echo "Você está no peso normal";
    }
else
{
    echo "Você está acima do peso";
}


