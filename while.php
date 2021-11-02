<?php

$frutas = ["uva", "banana", "manga", "limão"];
$quantidade = count($frutas);


//WHILE
$c = 0;  //contador fora do laço de repetição
while ($c < $quantidade) {
    echo"<p> $frutas[$c] </p>";
    $c++; // incremento dentro do laçp

}

echo"<hr>";
//DO WHILE
$contador = 0;
do {
    echo"<p> $frutas[$contador]</p>";
    $contador++;  // incremento dentro do laço
} while ($contador < $quantidade);
