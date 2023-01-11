<?php


$string = <<<FINAL


oi
tudo bem
tchau
FINAL . PHP_EOL;

echo $string;


$nome= 'Natali'; 

function geraEmail(string $nome)
{

        ///sintaxe chamada herdoc equivalente a aspas duplas

$conteudoEmail = <<<FINAL

        Olá, $nome!

        Estamos entrando em contato para 
        motivo do contato

        {assinatura}
        FINAL;

        echo $conteudoEmail;

}

/////// se eu colocar aspas simples estou o meu delimitador tera o conteudo em as simples

//---------------------------------------------------------------------------------------

function geraEmail2(string $nome)
{

        ///sintaxe chamada nowdoc equivalente a aspas simples

$conteudoEmail = <<<FINAL

        Olá, $nome!

        Estamos entrando em contato para 
        motivo do contato

        {assinatura}
        FINAL;

        echo $conteudoEmail;

}




geraEmail2('Fauri');