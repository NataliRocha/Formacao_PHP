<?php

$notasBimestre1 = [

    'Vinicius'=>6,
    'João'=>8,
    'Ana'=>10,
    'Roberto'=>7,
   'Maria'=>9,

];


$notasBimestre2 = [
    'Vinicius'=>6,
    'João'=>8,
    'Ana'=>9,
    'Roberto'=>7,
    'Maria'=>10,
    

];


// essa função vai retornar um novo array que vai retornar todas as notas que estão no bimestre1 que não estão no bimestre dois, verfica apenas os valores
//sem verificar as chaves
//var_dump (array_diff($notasBimestre1,$notasBimestre2));

//verifica qual chave esta no primeiro array que não está nos proximos 
//var_dump(array_diff_key($notasBimestre1,$notasBimestre2));


//esse comando vai nos retornar um novo array com os valores que não são iguais, vai fazer uma comparação e retornar apenas os valores diferentes.
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

// //para ver quem esta faltando no primeiro array
// var_dump(array_diff_key($notasBimestre1, $notasBimestre2));



// //comando para ver apenas as notas dos alunos faltantes;
// $alunosFaltantes =array_diff_key($notasBimestre1, $notasBimestre2);
//  $nomesAlunos = array_keys($alunosFaltantes);
//  $notasAlunos = array_values($alunosFaltantes);
//  var_dump (array_keys($alunosFaltantes));
// var_dump(array_values($alunosFaltantes));
// //para combinar val
// array_combine($notasAlunos,$nomesAlunos);
// var_dump(array_combine($notasAlunos, $nomesAlunos));

// var_dump(array_flip($alunosFaltantes));
