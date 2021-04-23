<?php

// --------------------------
// |     Atividade 01       |    
// --------------------------
require_once "./class/Produtos.php";
require_once "./class/NotaFiscal.php";

$itens = new Produtos('011','tablet','7 polegadas','1','R$ 720,00');
$itens2 = new Produtos('012','celular','iphone','1','R$ 7200,00');

$nf = new notaFiscal('123','01/01/2021','09123092103','117.970.099-66','Renner','117.970.099-66','José');

$nf->adicionarItem($itens);
$nf->adicionarItem($itens2);

foreach ($nf->itensNota as $key => $value){
    echo $nf->itensNota[$key]->identificacao;
    echo '<br>';
    echo $nf->itensNota[$key]->nome;
    echo '<br>';
    echo $nf->itensNota[$key]->descricao;
    echo '<br>';
    echo $nf->itensNota[$key]->quantidade;
    echo '<br>';
    echo $nf->itensNota[$key]->valor;
};

// --------------------------
// |     Atividade 02       |    
// --------------------------




// --------------------------
// |     Atividade 03       |    
// --------------------------