<?php

$array = [

    1 => 'um',
    2 => 'dois',
    3=> 'tres'
];

foreach ($array as $numeral => $nomeNumero){

    echo "$numeral em portugês é: $nomeNumero" . "<br>";
}

echo "<br> Total: " . sizeof($array) . '<br>';