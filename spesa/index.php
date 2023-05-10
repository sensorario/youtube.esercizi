<?php

$budget = 400;
$spesa = 0;
$prodotti = [];
$prodotti[] = [ 'nome' => 'arancia', 'value' => 3 ];
$prodotti[] = [ 'nome' => 'banana', 'value' => 4 ];
$prodotti[] = [ 'nome' => 'cocomero', 'value' => 4 ];
$prodotti[] = [ 'nome' => 'datteri', 'value' => 666 ];
$index = 0;

while ($budget >= $spesa) {
    $current = $index++;
    $prodotto = $prodotti[$current];
    $skip = false;

    if ($prodotto === null || ($spesa + $prodotto['value']) > $budget) {
        $skip = true;
    }

    if ($skip === false) {
        $spesa += $prodotto['value'];
        printf("\nPierino ha messo %s nel carrello.", $prodotto['nome']);
    }

    if (!isset($prodotti[$current + 1])) break;
}

printf("\nPierino ha speso in totale %s.", $spesa);