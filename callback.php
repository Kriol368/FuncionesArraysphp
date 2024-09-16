<?php
$palabras = ["Buenas", "Adios", "Hola"];
$longitud = array_map("strlen", $palabras);
echo min($longitud);
echo "<br>";
echo max($longitud);