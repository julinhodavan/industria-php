<?php

class Produto
{
    private $codigo;
    private $nome;
    private $preco;

    public function __construct($codigo, $nome, $preco)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
    }
}