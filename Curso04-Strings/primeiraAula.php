<?php

$nome = 'Vinicius Dias';

$ehDaMinhaFamilia =str_contains($nome, 'Rocha');

if ($ehDaMinhaFamilia){

    echo "$nome é da minha família" . PHP_EOL;
}else{
    echo "$nome não é da minha familia" . PHP_EOL;
}

//verificar se uma variavel começa com determinada palavra

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https'. PHP_EOL)){
    echo 'É uma URL segura';
}else{
    echo 'Não é uma URL segura' . PHP_EOL;

}

//verificar se uma URL termina com determinada palavra


if (str_ends_with($url, '.br/')){
    echo 'É um domínio do Brasil';
} else{
    echo 'Não é um domínio do Brasil';
}




