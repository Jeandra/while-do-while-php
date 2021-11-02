<?php

$frutas = ["uva", "banana", "manga", "limão"];
$quantidade = count($frutas);


//WHILE
$c = 0;
while ($c < $quantidade) {
    echo"<p> $frutas[$c] </p>";
    $c++;

}

echo"<hr>";
//DO WHILE
$contador = 0;
do {
    echo"<p> $frutas[$contador]</p>";
    $contador++;
} while ($contador < $quantidade);
