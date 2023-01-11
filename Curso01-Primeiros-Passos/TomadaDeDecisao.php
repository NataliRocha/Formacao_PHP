<?php

$idade = 16;
$numeroDePessoas= 1;

echo "Você só pode entrar se tiver mais do que 18 anos ou se tiver acompanhado" . PHP_EOL;

if ($idade >=18 ){
    echo "Você tem $idade anos" .PHP_EOL;
    echo 'Pode entrar sozinho';
} 

else 

if($idade >=16 && $numeroDePessoas >1 ){
        echo "Voce tem $idade anos, está acompanhado(a), pode entrar" .PHP_EOL;
}
else{
    echo "Você tem $idade anos e não está acompanhado" .PHP_EOL;
    echo 'Não pode entrar';
}

echo PHP_EOL;
echo 'Tchau!';