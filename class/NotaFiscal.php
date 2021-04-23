<?php

require_once  "Produtos.php";

class notaFiscal {
    public $numero;
    public $data;
    public $chave;
    public $cnpjForncedor;
    public $emissor;
    public $docClinte;
    public $nomeCliente;
    public $itensNota = [];

    function __construct ($numero,$data,$chave,$cnpjForncedor,$emissor,$docClinte,$nomeCliente){
        $this->numero = $numero;
        $this->data = $data;
        $this->chave = $chave;
        $this->cnpjForncedor = $cnpjForncedor;
        $this->emissor = $emissor;
        $this->docClinte = $docClinte;
        $this->nomeCliente = $nomeCliente;
    }

    public function adicionarItem(Produtos $itensNota){
        $this->itensNota[] = $itensNota;
    }

    public function verItem(){
        return $this->itensNota;
    }
};
