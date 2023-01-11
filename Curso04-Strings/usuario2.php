<?php
// //colocando a mão a posição do arroba
// $email ='ana@alura.com.br';

// $posicaoDoArroba =3;

// echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
// echo substr($email, $posicaoDoArroba+1) . PHP_EOL;

// --------------------------------------------------------

// //o comando strpos vai nos mostrar o qual string esta entre os valores que determinamos -> posicao do que estamos buscando, neste caso o do arroba
// $email ='ana@alura.com.br';

// $posicaoDoArroba = strpos($email, '@');

// echo substr ($email, 0, $posicaoDoArroba) . PHP_EOL;
// echo substr ($email, $posicaoDoArroba + 1) . PHP_EOL;
//----------------------------------------------------------------------

// $email ='ana@alura.com.br';
// $senha ='123';
// //esse comando exibe o tamanho da variavel em bytes
// echo strlen($senha) .PHP_EOL;

// if (strlen($senha)<8){
//     echo 'Senha insegura' .PHP_EOL;

// } else{
// echo "Senha segura";
// }
//----------------------------------------------------------------------------------


// $email ='ana@alura.com.br';
// $senha ='123';

// $posicaoDoArroba =strpos($email, '@');
// $usuario =substr ($email,0,$posicaoDoArroba);
// //esse comando vai retornar uma copia da variavel com o conteudo da variavel em maiuscula mas sem os acentos
// echo strtoupper($usuario) . PHP_EOL;

//---------------------------------------------------------------------------------
//também temos o comando para deixar o conteudo da variavel em minuscula strtolower


//  $email ='ana@alura.com.br';
//  $senha ='123';

//  $posicaoDoArroba =strpos($email, '@');
//  $usuario =substr ($email,0,$posicaoDoArroba);
// //esse comando vai retornar uma copia da variavel com o conteudo da variavel em minuscula, porém sem acento
//  echo strtolower($usuario) . PHP_EOL;
//------------------------------------------------------------------------------------
// para utilizarmos com acento precisamos colocar o mb_ antes do comando em versões antigas

// $email ='ana@alura.com.br';
// $senha ='123';
// // //esse comando exibe o tamanho da variavel em bytes
//  echo  mb_strlen($email) .PHP_EOL;
//----------------------------------------------------------------------------------------

//Usando o comando explode para explodir varias strings diferentes fazendo elas se tornarem um array;

$nome= 'Vinícius Dias';

//var_dump(explode(' ', $nome));

// com essa função podemos usar o list para colocar em variaveis separadas o conteudo que explodimos

list ($nome, $sobrenome)=explode (' ', $nome);
echo ("Nome: $nome" . PHP_EOL . "Sobrenome: $sobrenome ");
//----------------------------------------------------------------------------------------------------