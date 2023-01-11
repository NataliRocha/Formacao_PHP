<?php

// for ($contador=1; $contador <=15; $contador= $contador+1){
//     echo "#$contador" . PHP_EOL;
// }

// Exemplo dois
// for ($contador=1; $contador <=15; $contador++){
//     echo "#$contador" . PHP_EOL;
// }

//for com if para pular numero
echo "\r";

for ($contador=1; $contador <=15; $contador= $contador+1){
    if ($contador == 13){

    }else{
    echo "#$contador" . PHP_EOL;
}
}

echo "\n";

//para pular um numero com !=
for ($contado=1; $contado <=15; $contado= $contado+1){
    if ($contado != 13){
        echo "#$contado" . PHP_EOL;
    }}

    //simplificando mais ainda
    echo "\n";

    for ($contado=1; $contado <=15; $contado++){
        if ($contado == 13){
            continue;
        }
        echo "#$contado" . PHP_EOL;
    }