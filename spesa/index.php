<?php

$budget = 400;
$spesa = 0;
$prodotti = [];
$prodotti[] = [ 'nome' => 'arancia', 'value' => 42 ];
$prodotti[] = [ 'nome' => 'banana', 'value' => 55 ];
$prodotti[] = [ 'nome' => 'cocomero', 'value' => 66 ];
$prodotti[] = [ 'nome' => 'datteri', 'value' => 333 ];
$index = 0;
$esci = false;

while ($esci === false && $budget >= $spesa) {
    $prodotto = $prodotti[$index++];
    if (($spesa + $prodotto['value']) > $budget) {
        $esci = true;
    } else {
        $spesa += $prodotto['value'];
        printf("\nPierino ha messo %s nel carrello.", $prodotto['nome']);
    }
}

printf("\nPierino ha speso in totale %s.", $spesa);