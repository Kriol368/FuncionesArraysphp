<?php
$elementos = ["Seguro", "que", "apruebo", "esta", "asignatura"];
$cantidad = count($elementos) - 1;
$pares = [];
for ($i = 0; $i < $cantidad; $i++) {
    $pares = [array_slice($elementos, 0, $i),[array_slice($elementos, $i,$cantidad-$i + 1)]];
}
print_r($pares);
