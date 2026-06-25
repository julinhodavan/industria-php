<?php

class OrdemProducao
{
    private $numero;
    private $data;
    private $quantidade;

    public function __construct($numero, $data, $quantidade)
    {
        $this->numero = $numero;
        $this->data = $data;
        $this->quantidade = $quantidade;
    }
}