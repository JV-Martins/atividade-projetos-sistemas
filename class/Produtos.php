<?php

class Produtos {
    public $identificacao;
    public $nome;
    public $descricao;
    public $quantidade;
    public $valor;

    function __construct($identificacao,$nome,$descricao,$quantidade,$valor)
    {
        $this->identificacao = $identificacao;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }
}