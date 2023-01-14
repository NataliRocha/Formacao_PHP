<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected $nome;
    protected $cpf;


    public function __construct($nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome =$nome;
        $this->cpf =$cpf;

    }
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): CPF
    {
        return $this->cpf->recuperaNumero();

    }
    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular)<5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    

}