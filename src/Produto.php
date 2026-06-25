<?php

class Produto
{
    private $codigo;
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($codigo, $nome, $preco, $estoque)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }
}