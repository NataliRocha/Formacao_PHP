<?php

$telefones =['(24) 99999 - 9999','(21) 99999 - 9999','(25) 99999 - 9999'];


foreach ($telefones as $telefone){

    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefone, $correspondencia);
    if ($telefoneValido) {

        //var_dump ($correspondencia);
        echo 'Telefone válido' . PHP_EOL;
    } else{
        echo 'Telefone inválido' . PHP_EOL;
    }

    


echo preg_replace(

    '/\(([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})/',
    '(XX) \2',
    $telefone
    ) . PHP_EOL;
}

