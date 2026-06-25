<?php

class Funcionario
{
    private $nome;
    private $matricula;
    private $cargo;

    public function __construct($nome, $matricula, $cargo)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
    }

    public function exibirDados()
    {
        return $this->nome . " - " . $this->cargo;
    }
}